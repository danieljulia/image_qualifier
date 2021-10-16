
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script>

      var data;
      var current=0;
      $(document).ready(function(){
          $.get("db/scan.php",function(d){
                data=d;
                update_image();
          });

          $('#points').on('mouseup',function(){
     

            var p=$('#points').val();
            $.ajax({
                url:'db/update.php',
                type:'get',
                data:{points:p,filename:data[current]},
                success:function(){
                    $('#myimage').fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100);
                    $('#points').val(5);
                    next();
                    $('#myimage').focus();

                }
            });

          });
      })

      function update_image(){
          $('#myimage').attr('src',"images/"+data[current]);
          $('#info').text((current+1)+"/"+data.length+" "+data[current]);
      }

      $('body').on('keyup',function(e) {
            e = e || window.event;
            console.log(e.target);
            if (e.keyCode == '37') {
               prev();
            }
            else if (e.keyCode == '39') {
                next();
            }

        });

        function next(){
            current++;
                if(current==data.length) current=0;
                update_image();
        }

        function prev(){
            current--;
                if(current<0) current=data.length-1;
                update_image();
        }

      </script>

  </body>
</html>