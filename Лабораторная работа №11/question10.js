let arrayProducts = [
    {
        id: 1,
        nameProduct: "Стол письменный",
        unitPrice: 12000, 
        quantity: 5, 
        cost: 60000,
    },
    {
        id: 2,
        nameProduct: "Стол кухонный",
        unitPrice: 12000, 
        quantity: 5, 
        cost: 60000,
    },
    {
        id: 3,
        nameProduct: "Стул",
        unitPrice: 12000, 
        quantity: 5, 
        cost: 60000,
    },
    {
        id: 4,
        nameProduct: "Шкаф книжный",
        unitPrice: 12000, 
        quantity: 5, 
        cost: 60000,
    },
];

const tableBody = document.querySelector('.table__body');

const renderData = (arrayProducts) => {
    const newArrayProducts = [];

    for(product of arrayProducts) {
        newArrayProducts.push(product);
    }

    localStorage.setItem("products", JSON.stringify(newArrayProducts));

    for(product of newArrayProducts) {
        let htmlProducts = 
        `
            <tr data-product="${product.id}">
                <td>${product.nameProduct}</td>
                <td>${product.unitPrice}</td>
                <td>${product.quantity}</td>
                <td></td>
            </tr>
        `;

        tableBody.insertAdjacentHTML('beforeend', htmlProducts);
    }
    newArrayProducts.forEach(item => {

        // let htmlProducts = 
        // `
        //     <tr data-product="${item.id}">
        //         <td>${item.nameProduct}</td>
        //         <td>${item.unitPrice}</td>
        //         <td>${item.quantity}</td>
        //         <td></td>
        //     </tr>
        //     <tr data-product="${item.id}">
        //         <td>${item.nameProduct}</td>
        //         <td>${item.unitPrice}</td>
        //         <td>${item.quantity}</td>
        //         <td></td>
        //     </tr>
        //     <tr data-product="${item.id}>
        //         <td>${item.nameProduct}</td>
        //         <td>${item.unitPrice}</td>
        //         <td>${item.quantity}</td>
        //         <td></td>
        //     </tr>
        //     <tr data-product="${item.id}>
        //         <td>${item.nameProduct}</td>
        //         <td>${item.unitPrice}</td>
        //         <td>${item.quantity}</td>
        //         <td></td>
        //     </tr>
        // `;

        // tableBody.insertAdjacentHTML('beforeend', htmlProducts);
    });
}

renderData(arrayProducts);