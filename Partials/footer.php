<!-- ******** Including Student SignUp Modal ******** -->
<?php include_once('./Student/student_SIgnupModal.php');?>
    <!-- ******** Including Studnet Login Modal******** -->
    <?php include_once('./Student/student_loginModal.php');?>
    <!-- ******** Including Admin Login Modal******** -->
    <?php include_once('./Admin/admin_LoginModal.php');?>
<footer>
        <div class="container-fluid bg-dark text-center p-4">
            <small class="text-white">Copyright &copy; 2023 || Developed by <b>ASystem</b> <?php if(!isset($_SESSION['isLogin'])){
                echo '|| <a href="" data-toggle="modal" data-target="#AdminLoginModal">Administration</a></small>';
            }?>
        </div>
    </footer>

<!-- Boostrap jQuery and JavaScript -->
<script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/proper.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <!-- FontAwesome JS -->
    <script type="text/javascript" src="./js/all.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Student Signup and Login Script -->
        <script type="text/javascript" src="./js/studentAjax.js"></script>
        <!-- Admin Signup and Login Script -->
        <script type="text/javascript" src="./js/adminAjax.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
    $('.owl-carousel').owlCarousel({
        loop: false,
        autoplay: true,
        margin: 10,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
    </script>
</body>

</html>