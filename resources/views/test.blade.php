<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
    <form method="GET" action="/test-store">
        <button>Submit</button>
    </form>
    <br>
    <span onclick="test('{{ csrf_token() }}')" style="cursor: pointer">Submit</span>
    <script>
        const test = async (csrf) => {
            const form = document.createElement('form');
            const input = document.createElement('input');
            input.setAttribute('name', '_token');
            input.value = csrf;
            form.appendChild(input);

            const formData = new FormData(form);
            // console.log(formData.get('_token')); return;
            const response = await fetch('/test', {
                method: "POST",
                body: formData
            });

            try {
                const data = await response.json();
                console.log(data);
            }catch(error){
                console.error(error);
            }
        };
    </script>
</body>
</html>