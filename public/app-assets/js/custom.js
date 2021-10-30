

// function render(number) {
//   if (number === 1) {
//     appendData.innerHTML = `
//         <div>
//             <input type="checkbox" name="check1" id="check1">
//             <label for="check1">Class 7</label>
//         </div>
//         <div>
//             <input type="checkbox" name="check2" id="check2">
//             <label for="check2">Class 8</label>
//         </div>
//         <div>
//             <input type="checkbox" name="check3" id="check3">
//             <label for="check3">Class 9</label>
//         </div>
//         <div>
//             <input type="checkbox" name="check4" id="check4">
//             <label for="check4">Class 10</label>
//         </div>
//         <div>
//             <input type="checkbox" name="check5" id="check5">
//             <label for="check5">Class 11</label>
//         </div>
//         `;
//   } else if (number === 2) {
//     appendData.innerHTML = "";
//     appendData.innerHTML = `
//     <div>
//         <input type="checkbox" name="check4" id="check4">
//         <label for="check4">Bangla</label>
//     </div>
//     <div>
//         <input type="checkbox" name="check5" id="check5">
//         <label for="check5">English</label>
//     </div>`;
//   } else if(number === 3){
//     appendData.innerHTML = "";
//     appendData.innerHTML = `
//     <div>
//         <input type="checkbox" name="check4" id="check4">
//         <label for="check4">Lesson 1</label>
//     </div>
//     <div>
//         <input type="checkbox" name="check5" id="check5">
//         <label for="check5">Lesson 2</label>
//     </div>`;
//   }
// }





function toggle(id){
    const createForm = document.getElementById(`createForm${id}`);
    createForm.classList.toggle("d-none");
}

function createData(id) {
    const dataValue = document.getElementById(`dataValue${id}`);
    const appendData = document.getElementById(`appendCategory${id}`);
    let inc = 8;
    let i = inc+id*27+Math.round(Math.random()*9273);

  const createHTMLElement = document.createElement(`div`);
  createHTMLElement.innerHTML = `<input type="checkbox" name="check${
    i + 1
  }" id="check${i + 1}">
    <label for="check${i + 1}">${dataValue.value}</label>`;
  appendData.appendChild(createHTMLElement);
  dataValue.value = "";
  inc+1;
}
