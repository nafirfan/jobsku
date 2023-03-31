// const dropArea = document.querySelector(".drag-area");
// const button = dropArea.querySelector("button");
// const input = dropArea.querySelector("input");
// let file;
//
// button.onclick = openFileChooser;
// input.addEventListener("change", handleFileChange);
//
// function openFileChooser() {
//     input.click();
// }
//
// function handleFileChange() {
//     if (!this.value) return;
//
//     // $('#imageInput').val($(this).val());
//     // file = this.files[0];
//     // dropArea.classList.add("active");
//     // showFile();
//     //
//     // this.value = null;
//     file = this.files[0];
//     dropArea.classList.add("active");
//     showFile();
//
//     this.value = null;
// }
//
// function showFile() {
//     let fileType = file.type;
//     let validExtensions = ["image/jpeg", "image/jpg", "image/png"];
//
//     if (validExtensions.includes(fileType)) {
//         let fileReader = new FileReader();
//         fileReader.onload = () => {
//             let fileURL = fileReader.result;
//             let imgTag = `<img src="${fileURL}" alt="image">`;
//
//             // // Update the image preview container's content
//             // const imagePreviewContainer = dropArea.querySelector(".image-preview");
//             // imagePreviewContainer.innerHTML = imgTag;
//
//             // Create a new div to hold the image preview
//             const previewDiv = document.createElement("div");
//             previewDiv.classList.add("image-preview");
//             previewDiv.innerHTML = imgTag;
//             dropArea.appendChild(previewDiv);
//
//             // Add event listener to the image element
//             const imageElement = dropArea.querySelector("img");
//             imageElement.addEventListener("click", openFileChooser);
//
//             // Hide the <p> and <button> elements
//             const pElement = dropArea.querySelector("p");
//             const buttonElement = dropArea.querySelector("button");
//             pElement.style.display = "none";
//             buttonElement.style.display = "none";
//         }
//         fileReader.readAsDataURL(file);
//     } else {
//         alert("This is not an Image File!");
//         dropArea.classList.remove("active");
//         dragText.textContent = "Drag & Drop to Upload File";
//     }
// }

const dropArea = document.querySelector(".drag-area");
const button = dropArea.querySelector("button");
const input = dropArea.querySelector("input");
let file;

button.onclick = openFileChooser;
input.addEventListener("change", handleFileChange);

function openFileChooser() {
    input.click();
}

function handleFileChange() {
    if (!this.value) return;

    file = this.files[0];
    dropArea.classList.add("active");
    showFile();
}

function showFile() {
    let fileType = file.type;
    let validExtensions = ["image/jpeg", "image/jpg", "image/png"];

    if (validExtensions.includes(fileType)) {
        let fileReader = new FileReader();
        fileReader.onload = () => {
            let fileURL = fileReader.result;
            let imgTag = `<img src="${fileURL}" alt="image">`;

            const previewDiv = document.createElement("div");
            previewDiv.classList.add("image-preview");
            previewDiv.innerHTML = imgTag;
            dropArea.appendChild(previewDiv);

            const imageElement = dropArea.querySelector("img");
            imageElement.addEventListener("click", openFileChooser);

            const pElement = dropArea.querySelector("p");
            const buttonElement = dropArea.querySelector("button");
            pElement.style.display = "none";
            buttonElement.style.display = "none";
        }
        fileReader.readAsDataURL(file);
    } else {
        alert("This is not an Image File!");
        dropArea.classList.remove("active");
        dragText.textContent = "Drag & Drop to Upload File";
    }
}


// const dropArea2=document.querySelector("#dragArea2"),dragText2=dropArea2.querySelector("header"),button2=dropArea2.querySelector("button"),input2=dropArea2.querySelector("input");let file2;button2.onclick=()=>{input2.click();}
// input2.addEventListener("change",function(){$('#imageInput2').val($(this).val());file2=this.files[0];dropArea2.classList.add("active");showFile2();});dropArea2.addEventListener("dragover",(event)=>{event.preventDefault();dropArea2.classList.add("active");dragText2.textContent="Release to Upload File";});dropArea2.addEventListener("dragleave",()=>{dropArea2.classList.remove("active");dragText2.textContent="Drag & Drop to Upload File";});dropArea2.addEventListener("drop",(event)=>{event.preventDefault();file=event.dataTransfer.files[0];showFile2();});function showFile2(){let fileType2=file2.type;let validExtensions2=["image/jpeg","image/jpg","image/png"];if(validExtensions2.includes(fileType2)){let fileReader2=new FileReader();fileReader2.onload=()=>{let fileURL=fileReader2.result;let imgTag2=`<img src="${fileURL}" alt="image">`;dropArea2.innerHTML=imgTag2;}
// fileReader2.readAsDataURL(file2);}else{alert("This is not an Image File!");dropArea2.classList.remove("active");dragText2.textContent="Drag & Drop to Upload File";}}
