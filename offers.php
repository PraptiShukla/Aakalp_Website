<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
    <body>

    <body style="background-image: url(css/Images/bg-1.jpg);">
    <div class="jhead"><u><h1 style="text-align: center; font-size:50px; font-family:Lucida Calligraphy; margin-top:15px;">Offers</h1></u></div>
    <br><br>

    <div class="cards">
      <div class="row row-cols-1 row-cols-md-4 g-4">
      <div class="col">
        <div class="card">
          <div class="card-body">
           <h5 class="card-title" style="font-size:40px; font-family:lucida calliography;">Kuber</h5> 
           Invest atleast Rs.1000 per month and you will get any gold item after completing 12 months according each month rate. 
           <hr>
           <b> Start Date: </b> 01-01-2023  <br>
           <b> End Date: </b> &nbsp 31-12-2024
           <hr>
           <br><button class="bubbly-button" id="btn">&nbsp &nbsp Apply... &nbsp &nbsp</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
           <h5 class="card-title" style="font-size:40px; font-family:lucida calliography;">Dipotsav</h5>
           On the special occasion of diwali get 3% off on gold making charges and some diamond making charges. 
           <hr>
           <b> Start Date: </b> 01-11-2023  <br>
           <b> End Date: </b> &nbsp 30-11-2024
           <hr>
           <br><button class="bubbly-button" id="btn1">&nbsp &nbsp Apply... &nbsp &nbsp</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
           <h5 class="card-title" style="font-size:40px; font-family:lucida calliography;">Raupya Mahotsav</h5>
           Get 10% bumper discount on any silver item. 
           <hr>
           <b> Start Date: </b> 01-05-2023  <br>
           <b> End Date: </b> &nbsp 31-05-2024
           <hr>
           <br><button class="bubbly-button" id="btn2">&nbsp &nbsp Apply... &nbsp &nbsp</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
           <h5 class="card-title" style="font-size:40px; font-family:lucida calliography;">Shagun</h5><br>
           Shadi is very memorable event in life. Design your memories with 5% discount on any bridal sets.  
           <hr>
           <b> Start Date: </b> 01-04-2023  <br>
           <b> End Date: </b> &nbsp 31-07-2023
           <hr>
           <br><button class="bubbly-button" id="btn4">&nbsp &nbsp Apply... &nbsp &nbsp</button>
          </div>
        </div>
      </div></div><br><br>

      <div class="jhead"><u><h1 style="text-align: center; font-size:50px; font-family:Lucida Calligraphy; margin-top:15px;">Upcoming Events</h1></u></div>

    <br><br><div class="row row-cols-1 row-cols-md-4 g-4">
    <div class="col">
        <div class="card">
          <div class="card-body">
           <h5 class="card-title" style="font-size:40px; font-family:lucida calliography;">Akshaya</h5><br>
           On one of the muhurat of Akshay Tritiya get 2% off on pure 22K and 24K gold, whole week.  
           <hr>
           <b> Start Date: </b> 16-04-2023  <br>
           <b> End Date: </b> &nbsp 23-04-2024
           <hr>
           <br><button class="bubbly-button" id="btn3">&nbsp &nbsp Apply... &nbsp &nbsp</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
           <h5 class="card-title" style="font-size:40px; font-family:lucida calliography;">Gurupushya</h5>
           Gurupushyamrut is also one of special muhurta, Get 5% discount on every item on this day.  
           <hr>
           <b> Start Date: </b> 25-08-2023  <br>
           <b> End Date: </b> &nbsp 25-08-2023
           <hr>
           <br><button class="bubbly-button" id="btn5">&nbsp &nbsp Apply... &nbsp &nbsp</button>
          </div>
        </div>
      </div>
</div>
</div>

    <?php include('footer.php'); ?>
</body>
</html>    



<script>
// const btn = document.getElementById('btn');
// btn.addEventListener('click', function handleClick() {
//   btn.textContent = 'Offer Applied...';
// });

btn.addEventListener('click', function handleClick() {
  const initialText = ' Apply... ';

  if (btn.textContent.toLowerCase().includes(initialText.toLowerCase())) {
    btn.textContent = 'Offer Applied...';
  } else {
    btn.textContent = initialText;
  }
});

btn1.addEventListener('click', function handleClick() {
  const initialText = ' Apply... ';

  if (btn1.textContent.toLowerCase().includes(initialText.toLowerCase())) {
    btn1.textContent = 'Offer Applied...';
  } else {
    btn1.textContent = initialText;
  }
});

btn2.addEventListener('click', function handleClick() {
  const initialText = ' Apply... ';

  if (btn2.textContent.toLowerCase().includes(initialText.toLowerCase())) {
    btn2.textContent = 'Offer Applied...';
  } else {
    btn2.textContent = initialText;
  }
});

btn3.addEventListener('click', function handleClick() {
  const initialText = ' Apply... ';

  if (btn3.textContent.toLowerCase().includes(initialText.toLowerCase())) {
    btn3.textContent = 'Offer Applied...';
  } else {
    btn3.textContent = initialText;
  }
});

btn4.addEventListener('click', function handleClick() {
  const initialText = ' Apply... ';

  if (btn4.textContent.toLowerCase().includes(initialText.toLowerCase())) {
    btn4.textContent = 'Offer Applied...';
  } else {
    btn4.textContent = initialText;
  }
});

btn5.addEventListener('click', function handleClick() {
  const initialText = ' Apply... ';

  if (btn5.textContent.toLowerCase().includes(initialText.toLowerCase())) {
    btn5.textContent = 'Offer Applied...';
  } else {
    btn5.textContent = initialText;
  }
});
</script>    