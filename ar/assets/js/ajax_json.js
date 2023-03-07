// =======news==============
function load_news() {
// Show loader
$('#loader').removeClass('d-none')
var news = $('#news')
news.html('')
setTimeout(() => {
    $.ajax({
        // JSON FILE URL
        url: 'https://wmc-ksa.com/pdf_projects/public/news_api',
        // Type of Return Data
        dataType: 'json',
        // Error Function
        error: err => {
            console.log(err)
            alert("An error occured")
            $('#loader').addClass('d-none')
        },
        // Succes Function
        success: function(resp) {
            if (resp.length > 0) {
                // If returned json data is not empty
                // looping the returned data
                Object.keys(resp).map(k => {
                    if(resp[k].lang=="ar")
                news.append('<span class="dot"></span><a href="#">'+resp[k].content+'</a>')
                })
            } else {
                // If returned json data is empty
                news.append('<span class="dot"></span><a href="#">No data to display</a>')
              
              
            }
            $('#loader').addClass('d-none')
        }
    })
}, 500)
}
// =======end news============
// ============================
$(function() {
// Hide loader on document ready
$('#loader').addClass('d-none')
setTimeout(() => {
    load_news()
    }, 200)
})
