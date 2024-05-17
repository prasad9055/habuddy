
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=$css_link?>/js/scripts.js"></script>
       <script src="<?=$css_link?>/js/DataTables/datatables.min.js"></script>
       <script src="<?=$css_link?>/js/jquery-3.6.0.min.js"></script>
 <script>
       $(document).ready( function () {
    $('#myTable').DataTable();
    } );  
    
    
    $(".tiptext").mouseover(function() {
    $(this).children(".description").show();
}).mouseout(function() {
    $(this).children(".description").hide();
});


    </script>


          <!-- Summernote JS - CDN Link 
   <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>-->
   <script src="<?=$css_link?>/js/summernote-lite.min.js"></script>
  
  <script>
        $(document).ready(function() {
            $("#summernote").summernote(
                {
                    
        placeholder: 'write content',
        tabsize: 2,
        height: 400
      }
            );
            $('.dropdown-toggle').dropdown();
        });
    </script>


<script>
     
        $(document).ready(function() {
            $("#editsummernote").summernote(
                {
                    
        placeholder: 'write content',
        tabsize: 2,
        height: 400
      }
            );
            $('.dropdown-toggle').dropdown();
        });


    </script>
     
    <!-- //Summernote JS - CDN Link -->
<!--image preview code -->
    <script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#previewImage').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function () {
        readURL(this);
    });
</script>


<!--image load onclick Method -->
<script>
function myFunction() {
  document.getElementById("demo").innerHTML = '<img id="previewImage" src="#" alt="Preview"  width="200px" height="150px"/>';
 document.getElementById("labelWithHTML").style.display="none";
document.getElementById("rest").innerHTML = ' <label  class="upload-btn" onclick="myReset()" >Remove Image </label>';

}

function myReset(){

    document.getElementById("demo").innerHTML = ' ';
    document.getElementById("labelWithHTML").style.display="inline";
    document.getElementById("rest").innerHTML = '';

}
</script>



  
  
    </body>
</html>