document.addEventListener("DOMContentLoaded", function() {
    let forms = document.querySelectorAll("form.xhr");
    if(forms) {
        forms.forEach(form => {
            form.addEventListener("submit", function(event) {
                event.preventDefault();
                submitThis(form);
            }, false);
        })
    }
});

function submitThis(form) {
    let inputs = form.querySelectorAll("input, textarea, select");
    let jsonObj = {
        method: form.name
    };
    inputs.forEach(input => {
        let value;

        switch(input.type) {
            case "checkbox":
                value = (input.checked) ? 1 : 0;
                break;
            default:
                value = (Boolean(input.value)) ? input.value: null;
                break;
        }
        jsonObj[input.name] = value;
    });
    let xhr = new XMLHttpRequest();
    xhr.open(form.method, form.action, false);
    xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    xhr.send(JSON.stringify(jsonObj));
    let response = JSON.parse(xhr.responseText);
    if (response.solutions === undefined)
    {
        window.location.href = '';
    } else {
        alert(response.solutions);
    }
}
