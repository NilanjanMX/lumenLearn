
<button onclick="ajaxCheck()">Ajax check</button>
https://dev.to/meherulsust/how-to-build-a-jwt-authenticated-api-with-lumen-831-171o
<hr>

<script>
    const url = "{{ url('/ajax') }}";
    console.log(url);
    async function ajaxCheck() {
        const data = {
            email: 'nilanjan@gmail.com',
            password: '123456789'
        };
        const options = {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json', // Specify the content type as JSON
            },
            body: JSON.stringify(data), // Convert the data object to a JSON string
        };
        let request = await fetch(url, options);
        let response = await request.json();

        console.log(response);
    }
</script>
