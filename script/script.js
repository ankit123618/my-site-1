const bookform = document.getElementById("main");
const url = "upload.php"
bookform.addEventListener("submit", event => {
    event.preventDefault();
    console.log(bookform);
    // serialize the form
    const data = new FormData(bookform);
    // Log the form values
    for (let pair of data.entries()) {
        console.log(pair[0] + ': ' + pair[1]);
    }
    // specify insert options for books
    const bioptions = {
        method: "POST",
        body: JSON.stringify(data),
        headers: {
            "Content-type": "multipart/formdata"
        }
    }
    // ajax call for sending the data for insertion
    const promise = fetch(url,bioptions)
    promise.then(res => {
        console.log(res)
        res.json()
    }).then(data => {
        console.log(data);
    })
})

