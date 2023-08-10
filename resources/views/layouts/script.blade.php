<!-- Jquery JS-->
<script src="./vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="./vendor/bootstrap-4.1/popper.min.js"></script>
<script src="./vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="./vendor/slick/slick.min.js">
</script>
<script src="./vendor/wow/wow.min.js"></script>
<script src="./vendor/animsition/animsition.min.js"></script>
<script src="./vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="./vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="./vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="./vendor/circle-progress/circle-progress.min.js"></script>
<script src="./vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="./vendor/chartjs/Chart.bundle.min.js"></script>
<script src="./vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="js/main.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script>
    function myFunction() {
        if(!confirm("Bạn có chắc chắn muốn xóa ?"))
        event.preventDefault();
    }
</script>

<script>
    function sendRequest() {
        if(!confirm("Bạn có chắc chắn muốn gửi yêu cầu này ?"))
        event.preventDefault();
    }
</script>

<script>
    function confirmAction() {
        if(!confirm("Bạn có chắc chắn muốn thực hiện hành động này ?"))
        event.preventDefault();
    }
</script>

<script>
    const menuItems = document.querySelectorAll('#menuItem');
    let activeMenuItemIndex = localStorage.getItem('activeMenuItemIndex');

    if (activeMenuItemIndex !== null) {
        menuItems[activeMenuItemIndex].classList.add('active');
    }

    menuItems.forEach((item, index) => {
        item.addEventListener('click', () => {
            // Xóa class active của menu item trước đó (nếu có)
            const currentActiveItem = document.querySelector('#menuItem.active');
            if (currentActiveItem) {
                currentActiveItem.classList.remove('active');
            }
            // Thêm class active vào menu item được click
            item.classList.add('active');

            // Lưu trạng thái của menu item được chọn vào local storage
            localStorage.setItem('activeMenuItemIndex', index);
        });
    });
</script>
