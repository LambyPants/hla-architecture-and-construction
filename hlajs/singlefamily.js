$(document).ready(function() {

   /* activate the carousel */
   $("#modal-carousel").carousel({interval:false});


   /* when clicking a thumbnail */
   $(".row .thumbnail").click(function(){
    var content = $(".carousel-inner");
    var title = $(".modal-title");
    var ol = $("ol");
    ol.empty();
    content.empty();
    title.empty();

  	var id = this.id;
     var repo = $("#img-repo .item");
     var repoCopy = repo.filter("#" + id).clone();
     var repoNumber = repo.filter("#" + id).length;
     var active = repoCopy.first();
     for(i=0; i<repoNumber; i++){
     $("ol").append("<li data-target='#modal-carousel' data-slide-to='0'></li>")};

     var firstImage = $("li").first();
     firstImage.addClass("active");
    active.addClass("active");
    title.html(active.find("img").attr("title"));
  	content.append(repoCopy);

    // show the modal
  	$("#modal-gallery").modal("show");
  });

});
