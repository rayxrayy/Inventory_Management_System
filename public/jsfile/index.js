const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector(".theme-toggler");
const logoutbtn = document.querySelector(".logout");
// const sideBar = document.querySelector(".sidebar");
// show sidebar
menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})

//close sidebar
closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})
function showEditForm() {
    document.getElementById("add_category").style.display = "none";
    document.getElementById("edit-form").style.display = "block";
  }

//   function showEditForm() {
//     document.getElementById("add_category").style.display = "none";
//     document.getElementById("edit-form").style.display = "block";
//   }
//change theme
themeToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-variables');
    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
})

//change navbar onclick
// const sidebarItems = document.querySelectorAll('.sidebar a');
// sidebarItems.forEach((item) => {
//     console.log(item)
//   item.addEventListener('click', () => {
//     sidebarItems.forEach((sidebarItem) => {
//       sidebarItem.classList.remove('active');
//     });
//     // console.log(item)
//     item.classList.add('active');
//   });
// });


//Add Category
function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }

  function editCategory(category){
    document.getElementById('category-id').value = category.id;
    document.getElementById('category-name').value = category.name;
    document.getElementById('category-status').value = category.status;
    document.getElementById('edit-category-form').style.display = "block";
  }

  function closeEditFormm(){
      document.getElementById("edit-category-form").style.display = "none";
  }


  //Add Product
function openForm() {
    document.getElementById("myForm").style.display = "block";
  }

  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }

  function editProduct(product){
    document.getElementById('product-id').value = product.id;
    document.getElementById('product-name').value = product.name;
    document.getElementById('product-price').value = product.price;
    document.getElementById('product-qty').value = product.quantity;
    document.getElementById('product-category').value = product.category;
    document.getElementById('product-status').value = product.availability;
    document.getElementById('edit-product-form').style.display = "block";
  }

  function closeEditForm(){
      document.getElementById("edit-product-form").style.display = "none";
  }

  //edit member

  function editMember(member){
    document.getElementById('member-id').value = member.id;
    document.getElementById('member-name').value = member.name;
    document.getElementById('member-password').value = member.password;
    document.getElementById('member-email').value = member.email;
    document.getElementById('member-phone').value = member.phone;
    document.getElementById('member-address').value = member.address;
    document.getElementById('gender').value = member.gender;
    document.getElementById('edit-member-form').style.display = "block";
  }

  function closeEditFom(){
      document.getElementById("edit-member-form").style.display = "none";
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

// const uploadBtn = document.getElementById('uploadBtn');
// const imageContainer = document.getElementById('imageContainer');

// uploadBtn.addEventListener('click', () => {
//   const input = document.createElement('input');
//   input.type = 'file';
//   input.accept = 'image/jpg , image/png';

//   input.addEventListener('change', (event) => {
//     const file = event.target.files[0];

//     const reader = new FileReader();
//     reader.addEventListener('load', (event) => {
//       const image = new Image();
//       image.src = event.target.result;
//       image.style.maxWidth = '100%';
//       image.style.maxHeight = '100%';
//       imageContainer.innerHTML = '';
//       imageContainer.appendChild(image);
//       imageContainer.style.display = 'block';
//     });

//     reader.readAsDataURL(file);
//   });

//   input.click();
// });

//delete button of category page
function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("category_data").deleteRow(i);
  }


//edit button order page
function editProfile() {
    this.isEditable = !this.isEditable;
  }


//print bill from order page
// function printDiv(divName) {
//     var printContents = document.getElementById(divName).innerHTML;
//     var originalContents = document.body.innerHTML;

//     document.body.innerHTML = printContents;

//     window.print();

//     document.body.innerHTML = originalContents;
// }



//add row to table (order form table)

// select the table and the add button
var table = document.getElementById("my-table");
var addButton = document.getElementById("add-row-btn");

// add an event listener to the button
addButton.addEventListener("click", function() {
  // create a new row element and set its class name
  var newRow = table.insertRow();
  newRow.className = "height1";

  // add cells to the row and set their content and attributes
  var productCell = newRow.insertCell();
  var productSelect = document.createElement("select");
  productSelect.name = "product";
  var option1 = document.createElement("option");
  option1.value = "volvo";
  option1.text = "Volvo";
  var option2 = document.createElement("option");
  option2.value = "saab";
  option2.text = "Saab";
  var option3 = document.createElement("option");
  option3.value = "fiat";
  option3.text = "Fiat";
  var option4 = document.createElement("option");
  option4.value = "audi";
  option4.text = "Audi";
  productSelect.add(option1);
  productSelect.add(option2);
  productSelect.add(option3);
  productSelect.add(option4);
  productCell.appendChild(productSelect);

  var qtyCell = newRow.insertCell();
  var qtyInput = document.createElement("input");
  qtyInput.type = "number";
  qtyInput.min = "1";
  qtyInput.placeholder = "Enter Qty";
  qtyInput.name = "qty";
  qtyInput.required = true;
  qtyCell.appendChild(qtyInput);

  var rateCell = newRow.insertCell();
  var rateInput = document.createElement("input");
  rateInput.type = "text";
  rateInput.placeholder = "";
  rateInput.name = "rate";
  rateInput.disabled = true;
  rateCell.appendChild(rateInput);

  var amountCell = newRow.insertCell();
  var amountInput = document.createElement("input");
  amountInput.type = "text";
  amountInput.placeholder = "";
  amountInput.name = "amount";
  amountInput.disabled = true;
  amountCell.appendChild(amountInput);

  var deleteCell = newRow.insertCell();
  var deleteButton = document.createElement("button");
  deleteButton.className = "order-btn";
  var deleteIcon = document.createElement("span");
  deleteIcon.className = "material-icons-sharp";
  deleteIcon.textContent = "delete";
  deleteButton.appendChild(deleteIcon);
  deleteCell.appendChild(deleteButton);

  // add an event listener to the delete button
  deleteButton.addEventListener("click", function() {
    newRow.remove();
  });
});
