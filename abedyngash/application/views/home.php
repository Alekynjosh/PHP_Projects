
    <section id="showcase">
      <div class="container1">
        <span class="text1">Hi, My name is ABEDNEGO NG'ANG'A, software developer and tech-enthusiast.</span>
        <div class="text2 row">
          <div class="footer-col col-md-5">
           <a id="myBtn" href="#"><span class="fa fa-book fa-1x">  </span>View BIO</a>     
          </div>
          <div class="footer-col col-md-4">
            <a href="<?php echo base_url('assets/abedyCV.pdf') ?>" download="abedyCV"><span class="fa fa-download fa-1x"></span>Download CV</a>
          </div>
        </div>
      </div>
    </section>


   <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span style="color: black;" class="close">&times;</span>
    <form>
      <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="text" class="form-control" value="ABEDNEGO NG'ANG'A WAWERU">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Locality</label>
        <input type="text" class="form-control" value="NAKURU, KENYA" >
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Y.O.B</label>
        <input type="text" class="form-control" value="1998" >
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Education</label>
        <input type="text" class="form-control" value="DEDAN KIMATHI UNIVERSITY OF TECHNOLOGY, ELBURGON SECONDARY SCHOOL, ST. PETER'S &amp; PAUL CATHOLIC ACADEMY" >
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Skills</label>
        <input type="text" class="form-control" value="PROGRAMMING, MUSIC" >
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Hobbies</label>
        <input type="text" class="form-control" value="PHOTOGRAPHY, COOKING, PLAYING PIANO" >
      </div>
    </form>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

   
<script type="text/javascript">
 var d = document.getElementById("home");
d.className += " current";
</script>