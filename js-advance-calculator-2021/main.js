window.addEventListener('load', _ => {

    let operator;
    let srn = document.querySelector('textarea');
    document.querySelectorAll('.operators').forEach(operator_btn => {
        operator_btn.addEventListener('click', cl => {
            if (srn.value != '') {
                operator = cl.target.id;
                srn.value = srn.value + '\n';
                srn.value += cl.target.textContent + '\n';
            } else {
                alert('Please insert a value before pressing the operator');
            }

        })
    });
    document.querySelectorAll('.num').forEach(n => {
        n.addEventListener('click', _number => {
            srn.value += _number.target.textContent;
            taskOperator();
        });
    });


    document.querySelector('#result').addEventListener('click', taskOperator);

    function taskOperator() {

        if (srn.value != '') {
            let ln = srn.value.split('\n');
            if (ln[1] == 'X') {
                document.querySelector('#show_result').value = parseInt(ln[0]) * parseInt(ln[2]);
            } else if (ln[1] == '+') {
                document.querySelector('#show_result').value = parseInt(ln[0]) + parseInt(ln[2]);
            } else if (ln[1] == '-') {
                document.querySelector('#show_result').value = parseInt(ln[0]) - parseInt(ln[2]);
            } else if (ln[1] == '/') {
                document.querySelector('#show_result').value = parseInt(ln[0]) / parseInt(ln[2]);
            }
        } else {
            alert('Please Provide some values');
        }
    }
    document.querySelector('#clear').addEventListener('click', _ => {
        srn.value = '';
        document.querySelector('#show_result').value = '';
    })


});