const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector(".theme-toggler");
const sideBar = document.querySelector(".sidebar");
// show sidebar
menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})

//change navbar onclick
const sidebarItems = document.querySelectorAll('.sidebar a');

sidebarItems.forEach((item) => {
  item.addEventListener('click', () => {
    sidebarItems.forEach((sidebarItem) => {
      sidebarItem.classList.remove('active');
    });
    item.classList.add('active');
  });
});



//sideBar.addEventListener('click', () => {
    // document.getElementsByTagName(a).className = "active";
    // document.body.classList.toggle('active');

    // sideBar.querySelector('span:nth-child(1)').classList.toggle('active');
    // sideBar.querySelector('span:nth-child(2)').classList.toggle('active');
    
//})

// function addClass() {
//     document.getElementsByTagName(a).className = "active";
// }

//Add Category
function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }





// HTML to Excel
function html_table_to_excel(type)
    {
        var data = document.getElementById('category_data');

        var file = XLSX.utils.table_to_book(data, {sheet: "sheet1"});

        XLSX.write(file, { bookType: type, bookSST: true, type: 'base64' });

        XLSX.writeFile(file, 'file.' + type);
    }

    const export_button = document.getElementById('export_button');

    export_button.addEventListener('click', () =>  {
        html_table_to_excel('xlsx');
    });




//image load product page

const uploadBtn = document.getElementById('uploadBtn');
const imageContainer = document.getElementById('imageContainer');

uploadBtn.addEventListener('click', () => {
  const input = document.createElement('input');
  input.type = 'file';
  input.accept = 'image/jpg , image/png';

  input.addEventListener('change', (event) => {
    const file = event.target.files[0];

    const reader = new FileReader();
    reader.addEventListener('load', (event) => {
      const image = new Image();
      image.src = event.target.result;
      image.style.maxWidth = '100%';
      image.style.maxHeight = '100%';
      imageContainer.innerHTML = '';
      imageContainer.appendChild(image);
      imageContainer.style.display = 'block';
    });

    reader.readAsDataURL(file);
  });

  input.click();
});



// var uploaded_image = "";
// function importData() {
//     let input = document.createElement('input');
//     input.type = 'file';
//     input.accept = 'image/png, image/jpg';
//     input.onchange = _ => {
//       // you can use this method to get file and perform respective operations
//               let files =   Array.from(input.files);
//               console.log(files);
//               const reader = new FileReader();
//               reader.addEventListener("load", () => {
//                 uploaded_image = reader.result;
//                 document.querySelector("#display_image").style.backgroundImage = `url(${uploaded_image})`;
//               })
//               reader.readAsDataURL(this.files[0]);

//           };
//     input.click();
    
//   }
//   const image_input = document.querySelector("#image_input");
//   image_input.addEventListener("change", function(){
//     const reader = new FileReader();
//               reader.addEventListener("load", () => {
//                 uploaded_image = reader.result;
//                 document.querySelector("#display_image").style.backgroundImage = `url(${uploaded_image})`;
//               })
//               reader.readAsDataURL(this.files[0]);
//   })






//edit button order page
function editProfile() {
    this.isEditable = !this.isEditable;
  }


//print bill from order page
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
}