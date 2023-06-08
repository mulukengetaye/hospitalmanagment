const form = document.getElementById('form');
    const serprice = document.getElementById('amount');
    const bedprice = document.getElementById('price');
    const roomno = document.getElementById('roomno');
    const noday = document.getElementById('noday');
    const cardNo = document.getElementById('cardno');
    const itemid = document.getElementById('itemid');
    const accpterName = document.getElementById('nameacceptor');


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

    const validateInputs = () => {
        const serprice2 = serprice.value.trim();
        const bedprice2 = bedprice.value.trim();
        const roomno2 = roomno.value.trim();
        const cardNo2 = cardNo.value.trim();
        const accpterName2 = accpterName.value.trim();
        const noday2 = noday.value.trim();
        const itemid2 = itemid.value.trim();

    
        if (cardNo2 === '') {
            setError(cardNo, 'Card number is required');
        } else {
            setSuccess(cardNo);
        }
        if (itemid2 === '') {
            setError(itemid, 'Item id is required');
        } else {
            setSuccess(itemid);
        }
        if (serprice2 === '') {
            setError(serprice, 'Service price  is required');
        } else {
            setSuccess(serprice);
        }
        if (bedprice2 === '') {
            setError(bedprice, 'Bed price is required');
        } else {
            setSuccess(bedprice);
        }
        if (noday2 === '') {
            setError(noday, 'Numberr of day is required');
        } else {
            setSuccess(noday);
        }
        if (roomno2 === '') {
            setError(roomno, 'Room number is required');
        } else {
            setSuccess(roomno);
        }

        if (accpterName2 === '') {
            setError(accpterName, 'accpterName is required');
        } else {
            setSuccess(accpterName);
        }



    };