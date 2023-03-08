// =======news==============
function load_news(selectnew) {
// Show loader
$('#loader').removeClass('d-none')
var news = $('#news')
var news_page=$('#news-page')
news.html('')
news_page.html('')
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
               { news.append('<span class="dot"></span><a class="scrollto" href="news_page.php?new='+resp[k].id+'">'+resp[k].content+'</a>')
                if(selectnew==resp[k].id)
                news_page.append('<div id="new'+resp[k].id+'" class="row mb-4"><div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100"><img src="https://wmc-ksa.com//pdf_projects/public/'+resp[k].file_name+'" class="img-fluid" alt=""></div><div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100"> <p class="text-align-justify ">'+resp[k].content+'</p></div></div>')
                }
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
    load_news(-1)
    }, 200)
})
