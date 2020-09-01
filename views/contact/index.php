

<div class="contact_first">
    <div class="contact_inner_first">
       <h1>Contact us</h1> 
       <p>Nulla tempus sollicitudin dui, ut vehicula lacus porta vel duis urna ligula luctus at feugiat a lacinia ut sem.</p>
    </div>
</div>


<div class="contact_second container">
    <h2>Get In Touch</h2>
    <hr>
    <p>Nulla tempus sollicitudin dui, ut vehicula lacus porta vel. Duis urna ligula, luctus at feugiat a lacinia ut sem. Quisque sit amet ipsum ac odio malesuada convallis.</p>
    <div class="contact_inputs">
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Email">
    </div>
    <textarea rows="5" placeholder="Message"></textarea>
    <div class="btn">
        <input type="button" value="Send Request">
    </div>
</div>

<div class="contact_third">

    <div class="contact_inner_third">

        <table>
            <tr>
                <td>    
                    <h3>Address</h3>
                    <p>404A, Flower Street San Fransisco</p>
                </td>
                <td>
                    <h3>Phone</h3>
                    <p>+00 125 456 8754</p>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Email</h3>
                    <p>travelers@gmail.com</p>
                </td>
                <td>
                    <h3>Social</h3>                    
                </td>
            </tr>
        </table>
    </div>
</div>

<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
function myMap() {
    var mapProp= {
        center:new google.maps.LatLng(40.638279, 22.936251),
        zoom:10
    };

    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=&callback=myMap"></script>
