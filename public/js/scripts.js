const container = document.querySelector('#pic-content');
const fileInput = document.querySelector('#file-input');
// console.log(fileInput);
async function loadTrainingData() {
	// const labels = ['Fukada Eimi', 'Rina Ishihara', 'Takizawa Laura', 'Yua Mikami','Bao Thy','Tuan Hung','Minh Vuong','Anh Quan Ido','Lionel Messi','Suarez','Pique','Sergio Busquets','Stegen','Jordi Alba']
	// const labels = ['Fukada Eimi', 'Rina Ishihara']
	// const labels = ['amy']
	console.log(labels);
	const faceDescriptors = []
	for (const label of labels) {
		const descriptors = []
		for (let i = 1; i <= 4; i++) {
			const image = await faceapi.fetchImage(`js/data/${label}/${i}.jpg`)
			const detection = await faceapi.detectSingleFace(image).withFaceLandmarks().withFaceDescriptor()
			descriptors.push(detection.descriptor)
		}
		faceDescriptors.push(new faceapi.LabeledFaceDescriptors(label, descriptors))
		Toastify({
			text: `Training xong data của ${label}!`
		}).showToast();
	}
	let text = JSON.stringify(faceDescriptors);
	localStorage.setItem('data',text);
	// console.log(text);
	// console.log(faceDescriptors)
	return faceDescriptors
}

let faceMatcher
async function init() {
	await Promise.all([
		faceapi.loadSsdMobilenetv1Model('js/models'),
		faceapi.loadFaceRecognitionModel('js/models'),
		faceapi.loadFaceLandmarkModel('js/models'),
	])


	Toastify({
		text: "Tải xong model nhận diện!",
	}).showToast();

	// if(localStorage.getItem('data')) {
	// 	console.log('a')
	// 	const trainingData = JSON.parse(localStorage.getItem('data'));
	// 	console.log(trainingData)
	// 	faceMatcher = new faceapi.FaceMatcher(trainingData, 0.55)
	// } else {
	// 	console.log('b')
	// 	const trainingData = await loadTrainingData()
	// 	faceMatcher = new faceapi.FaceMatcher(trainingData, 0.55)
	// }

	const trainingData = await loadTrainingData()
	console.log(trainingData)
	faceMatcher = new faceapi.FaceMatcher(trainingData, 0.55)
	document.querySelector("#loading").remove();
}

init()

fileInput.addEventListener('change', async () => {
	const files = fileInput.files;

	const image = await faceapi.bufferToImage(files[0]);
	const canvas = faceapi.createCanvasFromMedia(image);
	// console.log(canvas);
	container.innerHTML = ''
	container.append(image);
	container.append(canvas);

	const size = {
		width: image.width,
		height: image.height
	}

	faceapi.matchDimensions(canvas, size)

	const detections = await faceapi.detectAllFaces(image).withFaceLandmarks().withFaceDescriptors()
	const resizedDetections = faceapi.resizeResults(detections, size)

	// faceapi.draw.drawDetections(canvas, resizedDetections)


	for (const detection of resizedDetections) {
		const drawBox = new faceapi.draw.DrawBox(detection.detection.box, {
			label: faceMatcher.findBestMatch(detection.descriptor).toString()
		})
		drawBox.draw(canvas)
	}
})