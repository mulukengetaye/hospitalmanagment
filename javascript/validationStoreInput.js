const form = document.getElementById('form');
    const Itemid = document.getElementById('Itemid');
    const ItemName = document.getElementById('ItemName');
    const category = document.getElementById('category');
    const price = document.getElementById('price');
    const amount = document.getElementById('amount');
    const recorded = document.getElementById('recorded');


    form.addEventListener('submit', e => {
        e.preventDefault();

        validateInputs();
    });

    const setError = (element, message) => {
        const div1 = element.parentElement;
        const errorDisplay = div1.querySelector('.error');

        errorDisplay.innerText = message;
        div1.classList.add('error');
        div1.classList.remove('success')
    }

    const setSuccess = element => {
        const div1 = element.parentElement;
        const errorDisplay = div1.querySelector('.error');

        errorDisplay.innerText = '';
        div1.classList.add('success');
        div1.classList.remove('error');
    };

    // const isValidEmail = email => {
    //     const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    //     return re.test(String(email).toLowerCase());
    // }

    const validateInputs = () => {
        const itemid = Itemid.value.trim();
        const itemname = ItemName.value.trim();
        const itemprice = price.value.trim();
        const itemcatagory = category.value.trim();
        const amount2 = amount.value.trim();
        const recorded2 = recorded.value.trim();
        var regName = /^[A-Za-z]+$/;
        var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
        var regAge = /^[0-9]\w{1,2}$/;
  

        if (itemid === '') {
            setError(Itemid, 'Item Id is required');
        } else {
            setSuccess(Itemid);
        }

        if (itemname === '') {
            setError(ItemName, 'Item name is required');
        } else if (!itemname.match(regName)) {
            setError(ItemName, 'Item name must be character only.');
        }
        else {
            setSuccess(ItemName);
        }

        if (itemprice === '') {
            setError(price, 'price is required');
        } else {
            setSuccess(price);
        }

        if (itemcatagory === '') {
            setError(category, 'Item catagory is required');
        } else if (!itemcatagory.match(regName)) {
            setError(category, 'Catagory must be character only.');
        }

        else {
            setSuccess(category);
        }
        if (amount2 === '') {
            setError(amount, 'Item amout is required');
        } else {
            setSuccess(amount);
        }
        if (recorded2 === '') {
            setError(recorded, 'Recordeder name is required');
        }
        else if (!recorded2.match(regName)) {
            setError(recorded, 'Name must be character only.');
        }
        else {
            setSuccess(recorded);
        }

    };