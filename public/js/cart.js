class Cart {
    constructor() {
        this.products = JSON.parse(localStorage.getItem('products'));
        this.products = this.products || [];
    }

    init = () => {
        this.renderProducts();
        this.renderCount();
    };

    push = (productItem) => {
        let domPrice = productItem.find('.real-price>span');
        domPrice = domPrice.length ? domPrice : productItem.find('.price>span');
        let product = {
            name: productItem.find('.name').text(),
            price: domPrice.text(),
            image: productItem.find('img:first').attr('src'),
            quantity: 1,
        };
        if (this.exist(product.name) === -1) {
            this.products.push(product);
            this.updateStorage();
            this.renderCount();
        }
    };

    updateStorage = () => {
        localStorage.setItem('products', JSON.stringify(this.products));
    };

    exist = (productName) => {
        for (let i = 0; i < this.products.length; i++) {
            if (this.products[i].name === productName) {
                return i;
            }
        }
        return -1;
    };

    update = (productName, quantity) => {
        let key = this.exist(productName);
        if (key === -1) {
            return;
        }
        this.products[key].quantity = quantity;
        this.updateStorage();
    };

    delete = (productName) => {
        let key = this.exist(productName);
        if (key === -1) {
            return;
        }
        this.products.splice(key,1);
        this.updateStorage();
        this.renderCount();
    };

    renderCount = () => {
        $('._header .cart span').text(this.products.length);
    };

    renderProducts = () => {
        let xhtml = '';
        this.products.map((product, index) => {
            let price = removeDotInNumber(product.price);
            let total = product.quantity * price;
            xhtml += `<tr>
                        <td class="w-35">
                            <div class="flex">
                                <img src="${product.image}" width="40" height="40">
                                <span class="name">${product.name}</span>
                            </div>
                        </td>
                        <td class="w-20">
                            <i class="icon icon-sub"></i>
                            <span class="quantity">${product.quantity}</span>
                            <i class="icon icon-add"></i>
                        </td>
                        <td class="price w-20" data-value="${price}">${product.price} vnđ</td>
                        <td class="total w-20">
                            <span>${addDotInNumber(total)}</span> vnđ
                        </td>
                        <td class="w-5 btn-remove">&times;</td>
                    </tr>`;
        });
        $('table tbody').html(xhtml);
        updateTotalPriceInCart();
    };
}
