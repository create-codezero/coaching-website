function menu() {
     $(".toggle i").toggleClass("fa-angle-up");
     $(".nav-menu").toggleClass("active");
}

function pop(name) {
     var classname = name.id;
     $(`.${classname}`).toggleClass("active");
}

function download(element) {
     var asset = element.id;
     $.post('download_count.php', {
               asset_id: asset
          },
          function (data, status) {
               $(`#p${asset}`).html(data);
          });
}

function like(element) {
     var asset = element.id;
     var cu_down = $(`#like${asset}`).val();
     $.post('like.php', {
               asset_id: asset,
               user_id: $("#user_id").val()
          },
          function (data, status) {
               if (data > cu_down) {
                    $(`.icon${asset}`).toggleClass("liked");
               } else {
                    $(`.icon${asset}`).toggleClass("liked");
               }
               $(`#likke${asset}`).html(data);
          });
}

function signinfirst() {
     alert("Please Sign In First");
}