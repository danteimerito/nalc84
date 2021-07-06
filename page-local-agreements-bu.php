
<?php get_header(); ?>

<?php
    


    // put ao's in alphabetical order
    // sort($aos);
    // total number of aos    
    // $aoslength = count($aos);
    
?>


<div class="container nav-spacer">
    <h1> Local Memorandums of Understanding </h1>
    <?php echo $aos; ?>
   
    <div class="row"> 
        <div class="col l12 m12 s12">
            <h3> Select Office </h3>
            <p> For any office within the installation of Pittsburgh select <i>'Pittsburgh'</i> </p>
            <form action="" id="">
    <label for="aos"></label>
    <div class="col l6 m12 s12"> 
    <select id="aos" name="aos" form="aos">
        <option value="">Select an office...</option>
        <option value="/documents/lmou-aliquippa/">Aliquippa</option>
        <option value="/documents/lmou-allison-park/">Allison Park</option>
        <option value="/documents/lmou-ambridge/">Ambridge</option>
        <option value="/documents/lmou-baden/">Baden</option>
        <option value="/documents/lmou-beaver/">Beaver</option>
        <option value="/documents/lmou-beaver-falls/">Beaver Falls</option>
        <option value="/documents/lmou-bentleyville/">Bentleyville</option>
        <option value="/documents/lmou-bethel-park/">Bethel Park</option>
        <option value="/documents/lmou-braddock/">Braddock</option>
        <option value="/documents/lmou-bridgeville/">Bridgeville</option>
        <option value="/documents/lmou-burgettstown/">Burgettstown</option>
        <option value="/documents/lmou-canonsburg/">Canonsburg</option>
        <option value="/documents/lmou-cheswick/">Cheswick</option>
        <option value="/documents/lmou-clairton/">Clairton</option>
        <option value="/documents/lmou-coraopolis/">Coraopolis</option>
        <option value="/documents/lmou-delmont/">Delmont</option>
        <option value="/documents/lmou-duquesne/">Duquesne</option>
        <option value="/documents/lmou-ellwood-city/">Ellwood City</option>
        <option value="/documents/lmou-evans-city/">Evans City</option>
        <option value="/documents/lmou-finleyville/">Finleyville</option>
        <option value="/documents/lmou-glenshaw/">Glenshaw</option>
        <option value="/documents/lmou-greensburg/">Greensburg</option>
        <option value="/documents/lmou-homestead/">Homestead</option>
        <option value="/documents/lmou-imperial/">Imperial</option>
        <option value="/documents/lmou-jeannette/">Jeannette</option>
        <option value="/documents/lmou-latrobe/">Latrobe</option>
        <option value="/documents/lmou-ligonier/">Ligonier</option>
        <option value="/documents/lmou-mcdonald/">McDonald</option>
        <option value="/documents/lmou-mckees-rocks/">McKees Rocks</option>
        <option value="/documents/lmou-midland/">Midland</option>
        <option value="/documents/lmou-monaca/">Monaca</option>
        <option value="/documents/lmou-/monessen">Monessen</option>
        <option value="/documents/lmou-monongahela/">Monongahela</option>
        <option value="/documents/lmou-murrysville/">Murrysville</option>
        <option value="/documents/lmou-natrona-heights/">Natrona Heights</option>
        <option value="/documents/lmou-new-brighton/">New Brighton</option>
        <option value="/documents/lmou-north-versailles/">North Versailles</option>
        <option value="/documents/lmou-oakdale/">Oakdale</option>
        <option value="/documents/lmou-pittsburgh/">Pittsburgh</option>
        <option value="/documents/lmou-rochester/">Rochester</option>
        <option value="/documents/lmou-scottdale/">Scottdale</option>
        <option value="/documents/lmou-sewickley/">Sewickley</option>
        <option value="/documents/lmou-slippery-rock/">Slippery Rock</option>
        <option value="/documents/lmou-tarentum/">Tarentum</option>
        <option value="/documents/lmou-vandergrift/">Vandergrift</option>
        <option value="/documents/lmou-verona/">Verona</option>
        <option value="/documents/lmou-washington/">Washington</option>
        <option value="/documents/lmou-waynesburg/">Waynesburg</option>
        <option value="/documents/lmou-zelienople/">Zelienople</option>

    </select>
    </br>
  <input type="submit" class="btn" id="ao-submit" value="View LMOU"/>
  </div>

  <script>
       
        const $select = document.getElementById('aos');
        const $baseurl = window.location.origin;
        const $pathname = $select.options[$select.selectedIndex].value;
        const $fullpath = $baseurl + $pathname;
        const $submitBtn = document.getElementById("ao-submit");
        
        // $submitBtn.disabled = true;

        // $pathname.addEventListener("change", function () {
        //     $submitBtn.disabled = false;
        // });

        $submitBtn.onclick = function() {
        // if ($select.options.selectedIndex!==0) {
            // e.preventDefault();
            let $url = window.location.origin + $select.options[$select.selectedIndex].value;{
            window.location.replace($url);
            return false; 
        // }        
    };


        // $submitBtn.addEventListener("click", function (evt) {
        
        // });
    

        

    </script>

</form>
        
      
    

<?php 
//     $aos = array("Aliquippa", "Allison Park", "Ambridge", "Baden", "Canonsburg", "Coraopolis", "Glenshaw","Greensburg", "Washington", "Beaver Falls", "Beaver", "Bentleyville", "Bethel Park", "Braddock","Bridgeville", "Burgettstown", "Cheswick", "Clairton", "Delmont", "Duquesne", "Ellwood City", "Evans City", "Finleyville", "Imperial", "Homestead", "Jeanette", "Latrobe", "Ligoner", "McDonald" , "McKees Rocks" , "Midland"   ,   "Monaca"  ,    "Monesson"  ,    "Rochester" ,     "Monongahela"    ,     "Murraysville"   ,    "Natrona Heights"   ,    "New Brighton"  ,     "North Versailles"  ,     "Oakdale"  ,     "Scottdale"  ,   "Sewickley"  ,   "Slippery Rock"   ,  "Tarentum" ,    "Vandergrift"  ,   "Verona"   ,  "Waynesburg"   ,  "Zelienople"  );
//     sort($aos);

// $arrayLength = count($aos);
    
// $i = 0;
// while ($i < $arrayLength)
// {
//     echo $aos[$i] ."<br />";
//     $i++;
// }
 ?>


</div>
</div>
</div>
<?php 
    wp_footer();
    get_footer();
?>    
 
</body>
</html>