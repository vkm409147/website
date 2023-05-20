let cart = [];

function addToCart(itemName, price) {
  cart.push({ itemName, price });

  updateCartTable();
  calculateTotalPrice();
}

function removeFromCart(index) {
  cart.splice(index, 1);

  updateCartTable();
  calculateTotalPrice();
}

function calculateTotalPrice() {
  let totalPrice = 0;
  cart.forEach(item => {
    totalPrice += parseFloat(item.price);
  });

  document.getElementById("total-price").innerText = totalPrice.toLocaleString() + ".000 VNĐ";
}

function updateCartTable() {
  const tbody = document.getElementById("cart-items");
  tbody.innerHTML = "";

  cart.forEach((item, index) => {
    const tr = document.createElement("tr");
    tr.innerHTML = `
      <td>${item.itemName}</td>
      <td>${parseFloat(item.price).toLocaleString()}VNĐ</td>
      <td><button onclick="removeFromCart(${index})" class="btn btn-danger">Delete</button></td>
    `;

    tbody.appendChild(tr);
  });
}

document.querySelectorAll("form").forEach(form => {
  form.addEventListener("submit", event => {
    event.preventDefault();

    const itemName = form.querySelector("[name='Item_Name']").value;
    const price = form.querySelector("[name='Price']").value;

    addToCart(itemName, price);
  });
});

document.getElementById("checkout").addEventListener("click", () => {
  alert("Cảm ơn bạn đã mua hàng! Tổng tiền của bạn là: " + document.getElementById("total-price").innerText);
  // Thực hiện chức năng thanh toán tại đây, ví dụ: chuyển đến trang thanh toán, gửi dữ liệu sang API, v.v.
  cart = [];
  updateCartTable();
  calculateTotalPrice();
});