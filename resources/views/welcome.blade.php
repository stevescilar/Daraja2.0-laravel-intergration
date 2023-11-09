<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daraja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>


<body>
    <div class="container">
        <h3>daraja 2.0</h3>

        <div class="row  mt-5">
            <div class="col-sm-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Obtain Access Token


                    </div>
                    <div class="card-body">
                        <button id="getAccessToken" class="btn btn-primary">Request Access Token</button>
                        <p>Access Token: <span id="access_token"></span></p>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">
                        Register URLs
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary">Register Url</button>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header">
                        Simulate Transactions
                    </div>
                    <div class="card-body">
                        <form action="">
                            @csrf
                            <div class="form-group">
                                <label for="amount">Amount:</label>
                                <input type="number" id="amount" class="form-control" placeholder="$100" required />
                            </div>
                            <div class="form-group">
                                <label for="account">Account:</label>
                                <input type="text" id="account" class="form-control" placeholder="070000000"
                                    required />
                            </div>

                            <button class="btn btn-primary mt-2">RUN</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.getElementById('getAccessToken').addEventListener('click', (event) => {
            event.preventDefault()

            axios.post('/get-token', {})
                .then((response) => {
                    console.log(response.data);
                    if (response.data && response.data.access_token) {
                        document.getElementById('access_token').innerHTML = response.data.access_token;
                    } else {
                        console.error('Access token not found in API response');
                    }
                })
                .catch((error) => {
                    console.error('API request failed:', error);
                });
            //     document.getElementById('access_token').innerHTML = response.data.access_token;
            // })
            // .catch((error) => {
            //     console.log(error);
            // });
        });
    </script>
</body>

</html>
