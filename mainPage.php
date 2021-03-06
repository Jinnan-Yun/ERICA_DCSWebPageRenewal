<?php
  include "./CommonHeader.php";
?>
  <link rel="stylesheet" href="./styles/common_header.css">
  <link rel="stylesheet" href="./styles/mainPage_style.css">
</head>

<body>

  <header>
    <ul>
      <p><a href="#">Sign-In</a></p>
      <p><a href="http://portal.hanyang.ac.kr" target="_blank">HY-IN</a></p>
      <p><a href="http://sw.hanyang.ac.kr/about/location.php">오시는길</a></p>
      <p><a href="./index.php" target="_blank">홈으로</a></p>
    </ul>
  </header>

  <article class="">
    <nav>
      <img id="logo" src="./assets/logo.png" alt="">
      <ul style="padding-left: 29%;">
        <li><a href="http://sw.hanyang.ac.kr/about/intro.php">학부소개</a></li>
        <li><a href="http://sw.hanyang.ac.kr/members/professor.php?ptype=list&code=professor&category=43">구성원</a></li>
        <li><a href="http://sw.hanyang.ac.kr/info/curriculum.php?category=27">학사정보</a></li>
        <li><a href="http://sw.hanyang.ac.kr/edu/software.php">교육사업</a></li>
        <li><a href="http://sw.hanyang.ac.kr/board/notice.php">게시판</a></li>
        <li><a href="http://sw.hanyang.ac.kr/student/lent.php">학생활동</a></li>
      </ul>
    </nav>
  </article>
  <div class="contents">
    <div class="mainImg">
      <img id="mainImg" src="./assets/main_img.png" alt="" width="1100px" height="305px">
    </div>

    <div class="department">
      <h4>학사정보</h4>
      <ul class="department_in">
        <li class="infor1">
          <h5>교과과정</h5>
          <p>새롭게 편성된 소프트웨어학부의</br>교과과정을 확인하세요.</p>
        </li>
        <li class="infor2">
          <h5>입학안내</h5>
          <p>소프트웨어학로 입학하는</br>방법을 안내해 드립니다.</p>
        </li>
        <li class="infor3">
          <h5>장학제도</h5>
          <p>소프트웨어학부의 다양한</br>장학제도를 안내해 드립니다.</p>
        </li>
        <li class="infor4">
          <h5>성적졸업</h5>
          <p>소프트웨어학에 졸업하기 위한</br>성적과 졸업정보를 확인하세요.</p>
        </li>
      </ul>
    </div>

    <div class="department" height="fit-contents" style="background-image:url('http://sw.hanyang.ac.kr/img/cont2_bg.jpg')">
      <h4>홍보자료</h4>
      <ul class="department_in">
        <iframe width="1150" height="300" src="https://www.youtube.com/embed/O2Ksr0uDFgo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </ul>
    </div>

  </div>

  <footer>
    <div class="footer">

    </div>
  </footer>
</body>

<?php
  include "./CommonTail.php";
?>
