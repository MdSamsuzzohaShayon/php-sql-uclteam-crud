$(".btnedit").click(e=>{
    console.log("Icon clicked");
    let textvalues = displayData(e);

    // SELECTING ALL ELEMENT FROM TABLE AND TAKING IT TO INPUT FIELDS
    let id = $("input[name*='book_id']");
    let bookname = $("input[name*='book_name']");
    let bookpublisher = $("input[name*='book_publisher']");
    let bookprice = $("input[name*='book_price']");

    id.val(textvalues[0]);
    bookname.val(textvalues[1]);
    bookpublisher.val(textvalues[2]);
    bookprice.val(textvalues[3].replace("$", ''));

    // GET VALUE OF A RECORD
    console.log(textvalues);
});

// SELECT THE VALUES FROM TABLE
// AND FUNCTION RETURN A ARRAY
function  displayData(e) {
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];


    for (const value of td){
        // GET ALL THE DATABASE RECORD
        // console.log(value);

        // GET SPECIFIC DATABASE RECORD
        if(value.dataset.id == e.target.dataset.id){
            console.log(e.target.dataset.id)
            console.log(value);
            textvalues[id++] = value.textContent;
        }
    }
    return textvalues;
}