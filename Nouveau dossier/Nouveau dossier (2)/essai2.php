<!DOCTYPE html PUPLIC"-//W3C//DTD XHTML 1.0 Strict//FR"
"http://WWW.W3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"xml/lang="fr">

 <head>
<meta name="viewport" content="width=device-width, user-scalable=no" charset="utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="camion.css">
<link rel="stylesheet" type="text/css" href="camion2.css">
<script src="camion.js"></script>
<title>kemoko</title>
<style type="text/css">
   
            .side-collapse-container{
              width:100%;
              position:relative;
              left:0;
              
          }
          .side-collapse-container.out{
              
          }
          .side-collapse {
              top:50px;
              bottom:0;
              left:0;
              width:180px;
             
            
          }
          .side-collapse.in {
              width:0;
              display: none;
          }

          .glyph{
            display: none;
          }
      

            .side-collapse-container2{
              width:100%;
              position:relative;
              left:0;
              
          }
          .side-collapse-container2.out{
              
          }
          .side-collapse2 {
              top:50px;
              bottom:0;
              left:0;
              width:180px;
             
            
          }
          .side-collapse2.in {
              width:0;
              display: none;
          }

          .glyph{
            display: none;
          }
      

            .side-collapse-container3{
              width:100%;
              position:relative;
              left:0;
              
          }
          .side-collapse-container3.out{
              
          }
          .side-collapse3 {
              top:50px;
              bottom:0;
              left:0;
              width:180px;
             
            
          }
          .side-collapse3.in {
              width:0;
              display: none;
          }

          .glyph{
            display: none;
          }
      

</style>
  <script type="text/javascript">

     $(document).ready(function () {
            var sideslider = $('[data-toggle=collapse-side]');
            var sel11 = sideslider.attr('data-target');
            var sel2 = sideslider.attr('data-target-2');
            sideslider.click(function(event){
                $(sel11).toggleClass('in');
                $(sel2).toggleClass('out');
                $(".pli").toggleClass("glyph");
            $(".depli").toggleClass("glyph");
            });

            var sideslider2 = $('[data-toggle=collapse-side2]');
            var sel12 = sideslider2.attr('data-target');
            var sel22 = sideslider2.attr('data-target-2');
            alert(sel22);
            sideslider2.click(function(event){
                $("sel12").toggleClass('in');
                $("sel22").toggleClass('out');
                $(".pli").toggleClass("glyph");
            $(".depli").toggleClass("glyph");
            });
            
            var sideslider3 = $('[data-toggle3=collapse-side]');
            var sel3 = sideslider3.attr('data-target3');
            var sel23 = sideslider3.attr('data-target-23');
            sideslider3.click(function(event){
                $("sel3").toggleClass('in');
                $("sel23").toggleClass('out');
                $(".pli").toggleClass("glyph");
            $(".depli").toggleClass("glyph");
            });
                  });

</script>
  </head>
  <body style="background-color: rgb(8,8,8);">
    <!--entete -->
      <header>
      
        <nav class="navbar navbar-inverse navbar-fixed-top" style="float: left;clear: both;">
            <div class="container-fluid pull-left">
                <!--menu pour telephone -->
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <!--menu de navigation -->
                <div class="collapse navbar-collapse ttt" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li><a class="men1" href="index.php">acceuil</a></li>



                     <li class="dropdown">
                            <a href="#" class="dropdown-toggle navbar-inverse" data-toggle="dropdown">Vue d'ensemble <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li><a href="vuedsm.php">Malapoya</a></li>
                            <li><a href="#">Kaboy6</a></li>
                    </ul>
                </li>


                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestion <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li><a href="camion.php">Camion</a></li>
                            <li><a href="#">Chargeur</a></li>
                            <li><a href="#">Point de chargement</a></li>
                      
                    </ul>
                </li>

                        <li><a class="men1" href="ajouter_vos_bien.php">Rapport</a></li>
                        <li><a style="" href="#">Getions utilisteur</a></li>
                        <li><a style="" href="#">Mon compte</a></li>
                      

                    </ul>
                </div>
            </div>

<!--menu de recheche  <img class="logo" src="images.png" style=" width: 80px; height: 50px;">
            <div class="" style="float: right; position: relative;top: 7px;">
            <form action="" class="search-form">
                <div class="form-group has-feedback">
                <label for="search" class="sr-only">Recherche</label>
                <input type="text" class="form-control" name="search" id="search" placeholder="recheche" data-toggle="collapse-side1" data-target=".side-collapse1" data-target-2=".side-collapse-container1" type="button" class="navbar-toggle pull-right">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
              </div>
            </form>
        </div>-->

<!--menu de recheche pour phone 
        <div class="navbar-inverse side-collapse1 in" style="">
    <div class="container-fluide" style="">
      <span class="glyphicon glyphicon-chevron-left" data-toggle="collapse-side1" style="color: rgb(255,255,255); float: left; position: relative;top: 4px;left: 15px;"></span>
            <form action="" class="search-form ccc" style="position: relative;top: -7px;">
                <div class="form-group has-feedback vvv">
                <label for="search" class="sr-only">Recherche</label>
                <input type="text" class="form-control" name="search" id="search" placeholder="recheche">
                  <span class=" form-control-feedback"></span>
              </div>
            </form>
        </div>-->
        <!--affichage  de resulta de recheche 
      <div class="container"  style="background-color: rgb(255,255,255);position: relative;top: 40px; bottom: 0; height:  100%;">
        <div class="row">
        <h1>Resultat</h1>
        <p>de recherche</p>
        <p></p>
        </div>
      </div>
      </div>-->
      </nav>       </header>


  <nav class=" navbar-inverse sidebar" style="position: fixed;">
    <div class="container-fluid" style="position: relative;height: 88%; overflow-y: scroll;">
       
      <ul class="nav navbar-nav" style="margin-left: 10; ">
                <li class="dropdown">
         <div class="navbar-header">
          <a data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" class="btn pull-left" style="margin: 0; padding: 0;"><span style="" class="depli  glyphicon glyphicon-menu-down glyph"></span><span style="" class="pli  glyphicon glyphicon-menu-right"></span>Settings1 </a>
        </div>
        <div class="navbar-inverse  side-collapse in">
        
            <ul class="nav navbar-nav" style="margin-left: 30;font-size: 15px;">
                                       <li><a href="#" style="margin: 0; padding: 0;">unite1</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite1</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite1</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite1</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite1</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite1</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite1</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite1</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite1</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite1</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite1</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite1</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite1</a></li>

            </ul>
          
        </div>
      </li>
            <li class="dropdown">
         <div class="navbar-header">
          <a data-toggle="collapse-side2" data-target=".side-collapse2" data-target-2=".side-collapse-container2" class="btn pull-left" style="margin: 0; padding: 0;"><span style="" class="depli  glyphicon glyphicon-menu-down glyph"></span><span style="" class="pli  glyphicon glyphicon-menu-right"></span>Settings2 </a>
        </div>
        <div class="navbar-inverse  side-collapse2 in">
        
            <ul class="nav navbar-nav" style="margin-left: 30;font-size: 15px;">
                                       <li><a href="#" style="margin: 0; padding: 0;">unite2</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite2</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite2</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite2</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite2</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite2</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite2</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite2</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite2</a></li>
                                   
                             <li><a href="#Home">Home</a></li>
              <li><a href="#users">Users</a></li>
              <li><a href="">Places</a></li>
            </ul>
          
        </div>
      </li>
            <li class="dropdown">
         <div class="navbar-header">
          <a data-toggle3="collapse-side3" data-target=".side-collapse" data-target-2=".side-collapse-container" class="btn pull-left" style="margin: 0; padding: 0;"><span style="" class="depli  glyphicon glyphicon-menu-down glyph"></span><span style="" class="pli  glyphicon glyphicon-menu-right"></span>Settings3 </a>
        </div>
        <div class="navbar-inverse  side-collapse3 in">
        
            <ul class="nav navbar-nav" style="margin-left: 30;font-size: 15px;">
                                       <li><a href="#" style="margin: 0; padding: 0;">unite3</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite3</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite3</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite3</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite3</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite3</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite3</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite3</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite3</a></li>
                                       <li><a href="#" style="margin: 0; padding: 0;">unite3</a></li>
                                    
            </ul>
          
        </div>
      </li>
        </ul>
  
        <!--
        <div style=""> 
            <ul class="nav navbar-nav" style="padding-bottom: 50; margin-bottom: 50;" >
                <li class="dropdown" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>

                    <ul class="dropdown-menu forAnimate" role="menu" style="">

                                                <li><a href="#">unite1</a></li>
                                                <li><a href="#">unite2</a></li>
                                                <li><a href="#">unite3</a></li>
                                                <li><a href="#">unite4</a></li>
                                                <li><a href="#">unite5</a></li>
                                                <li><a href="#">unite6</a></li>
                                                <li><a href="#">unite7</a></li>
                                                <li><a href="#">unite8</a></li>
                                                <li><a href="#">unite9</a></li>
                                                <li><a href="#">unite10</a></li>
                                                <li><a href="#">unite11</a></li>
                                                <li><a href="#">unite12</a></li>
                                                <li><a href="#">unite13</a></li>
                                                <li><a href="#">unite14</a></li>
                                                <li><a href="#">unite15</a></li>
                                                <li><a href="#">unite16</a></li>
                                                <li><a href="#">unite17</a></li>
                                                <li><a href="#">unite18</a></li>
                                                <li><a href="#">unite19</a></li>
                                                <li><a href="#">unite20</a></li>
                                                <li><a href="#">unite21</a></li>
                                                <li><a href="#">unite22</a></li>
                                                <li><a href="#">unite23</a></li>
                                                <li><a href="#">unite24</a></li>
                                                <li><a href="#">unite25</a></li>
                                                <li><a href="#">unite26</a></li>
                                                <li><a href="#">unite27</a></li>
                                                <li><a href="#">unite28</a></li>
                                                <li><a href="#">unite29</a></li>
                                                <li><a href="#">unite30</a></li>
                                                <li><a href="#">unite31</a></li>
                                                <li><a href="#">unite32</a></li>
                                                <li><a href="#">unite33</a></li>
                                                <li><a href="#">unite34</a></li>
                                                <li><a href="#">unite35</a></li>
                                                <li><a href="#">unite36</a></li>
                                                <li><a href="#">unite37</a></li>
                                                <li><a href="#">unite38</a></li>
                                                <li><a href="#">unite39</a></li>
                                                <li><a href="#">unite40</a></li>
                                                <li><a href="#">unite41</a></li>
                                                <li><a href="#">unite42</a></li>
                                                <li><a href="#">unite43</a></li>
                                                <li><a href="#">unite44</a></li>
                                                <li><a href="#">unite45</a></li>
                                                <li><a href="#">unite46</a></li>
                                                <li><a href="#">unite47</a></li>
                                                <li><a href="#">unite48</a></li>
                                                <li><a href="#">unite49</a></li>
                                                <li><a href="#">unite50</a></li>
                                                <li><a href="#">unite51</a></li>
                                                <li><a href="#">unite52</a></li>
                                                <li><a href="#">unite53</a></li>
                                                <li><a href="#">unite54</a></li>
                                                <li><a href="#">unite55</a></li>
                                                <li><a href="#">unite56</a></li>
                                                <li><a href="#">unite57</a></li>
                                                <li><a href="#">unite58</a></li>
                                                <li><a href="#">unite59</a></li>
                                                <li><a href="#">unite60</a></li>
                                                <li><a href="#">unite61</a></li>
                                                <li><a href="#">unite62</a></li>
                                                <li><a href="#">unite63</a></li>
                                                <li><a href="#">unite64</a></li>
                                                <li><a href="#">unite65</a></li>
                                                <li><a href="#">unite66</a></li>
                                                <li><a href="#">unite67</a></li>
                                                <li><a href="#">unite68</a></li>
                                                <li><a href="#">unite69</a></li>
                                                <li><a href="#">unite70</a></li>
                                                <li><a href="#">unite71</a></li>
                                                <li><a href="#">unite72</a></li>
                                                <li><a href="#">unite73</a></li>
                                                <li><a href="#">unite74</a></li>
                                                <li><a href="#">unite75</a></li>
                                                <li><a href="#">unite76</a></li>
                                                <li><a href="#">unite77</a></li>
                                                <li><a href="#">unite78</a></li>
                                                <li><a href="#">unite79</a></li>
                                                <li><a href="#">unite80</a></li>
                                                <li><a href="#">unite81</a></li>
                                                <li><a href="#">unite82</a></li>
                                                <li><a href="#">unite83</a></li>
                                                <li><a href="#">unite84</a></li>
                                                <li><a href="#">unite85</a></li>
                                                <li><a href="#">unite86</a></li>
                                                <li><a href="#">unite87</a></li>
                                                <li><a href="#">unite88</a></li>
                                                <li><a href="#">unite89</a></li>
                                                <li><a href="#">unite90</a></li>
                                                <li><a href="#">unite91</a></li>
                                                <li><a href="#">unite92</a></li>
                                                <li><a href="#">unite93</a></li>
                                                <li><a href="#">unite94</a></li>
                                                <li><a href="#">unite95</a></li>
                                                <li><a href="#">unite96</a></li>
                                                <li><a href="#">unite97</a></li>
                                                <li><a href="#">unite98</a></li>
                                                <li><a href="#">unite99</a></li>
                                                <li><a href="#">unite100</a></li>
                                                <li><a href="#">unite101</a></li>
                                                <li><a href="#">unite102</a></li>
                                                <li><a href="#">unite103</a></li>
                                                <li><a href="#">unite104</a></li>
                                                <li><a href="#">unite105</a></li>
                                                <li><a href="#">unite106</a></li>
                                                <li><a href="#">unite107</a></li>
                                                <li><a href="#">unite108</a></li>
                                                <li><a href="#">unite109</a></li>
                                                <li><a href="#">unite110</a></li>
                                                <li><a href="#">unite111</a></li>
                                                <li><a href="#">unite112</a></li>
                                                <li><a href="#">unite113</a></li>
                                                <li><a href="#">unite114</a></li>
                                                <li><a href="#">unite115</a></li>
                                                <li><a href="#">unite116</a></li>
                                                <li><a href="#">unite117</a></li>
                                                <li><a href="#">unite118</a></li>
                                                <li><a href="#">unite119</a></li>
                                                <li><a href="#">unite120</a></li>
                                                <li><a href="#">unite121</a></li>
                                                <li><a href="#">unite122</a></li>
                                                <li><a href="#">unite123</a></li>
                                                <li><a href="#">unite124</a></li>
                                                <li><a href="#">unite125</a></li>
                                                <li><a href="#">unite126</a></li>
                                                <li><a href="#">unite127</a></li>
                                                <li><a href="#">unite128</a></li>
                                                <li><a href="#">unite129</a></li>
                                                <li><a href="#">unite130</a></li>
                                                <li><a href="#">unite131</a></li>
                                                <li><a href="#">unite132</a></li>
                                                <li><a href="#">unite133</a></li>
                                                <li><a href="#">unite134</a></li>
                                                <li><a href="#">unite135</a></li>
                                                <li><a href="#">unite136</a></li>
                                                <li><a href="#">unite137</a></li>
                                                <li><a href="#">unite138</a></li>
                                                <li><a href="#">unite139</a></li>
                                                <li><a href="#">unite140</a></li>
                                                <li><a href="#">unite141</a></li>
                                                <li><a href="#">unite142</a></li>
                                                <li><a href="#">unite143</a></li>
                                                <li><a href="#">unite144</a></li>
                                                <li><a href="#">unite145</a></li>
                                                <li><a href="#">unite146</a></li>
                                                <li><a href="#">unite147</a></li>
                                                <li><a href="#">unite148</a></li>
                                                <li><a href="#">unite149</a></li>
                                                <li><a href="#">unite150</a></li>
                                                <li><a href="#">unite151</a></li>
                                                <li><a href="#">unite152</a></li>
                                                <li><a href="#">unite153</a></li>
                                                <li><a href="#">unite154</a></li>
                                                <li><a href="#">unite155</a></li>
                                                <li><a href="#">unite156</a></li>
                                                <li><a href="#">unite157</a></li>
                                                <li><a href="#">unite158</a></li>
                                                <li><a href="#">unite159</a></li>
                                                <li><a href="#">unite160</a></li>
                                                <li><a href="#">unite161</a></li>
                                                <li><a href="#">unite162</a></li>
                                                <li><a href="#">unite163</a></li>
                                                <li><a href="#">unite164</a></li>
                                                <li><a href="#">unite165</a></li>
                                                <li><a href="#">unite166</a></li>
                                                <li><a href="#">unite167</a></li>
                                                <li><a href="#">unite168</a></li>
                                                <li><a href="#">unite169</a></li>
                                                <li><a href="#">unite170</a></li>
                                                <li><a href="#">unite171</a></li>
                                                <li><a href="#">unite172</a></li>
                                                <li><a href="#">unite173</a></li>
                                                <li><a href="#">unite174</a></li>
                                                <li><a href="#">unite175</a></li>
                                                <li><a href="#">unite176</a></li>
                                                <li><a href="#">unite177</a></li>
                                                <li><a href="#">unite178</a></li>
                                                <li><a href="#">unite179</a></li>
                                                <li><a href="#">unite180</a></li>
                                                <li><a href="#">unite181</a></li>
                                                <li><a href="#">unite182</a></li>
                                                <li><a href="#">unite183</a></li>
                                                <li><a href="#">unite184</a></li>
                                                <li><a href="#">unite185</a></li>
                                                <li><a href="#">unite186</a></li>
                                                <li><a href="#">unite187</a></li>
                                                <li><a href="#">unite188</a></li>
                                                <li><a href="#">unite189</a></li>
                                                <li><a href="#">unite190</a></li>
                                                <li><a href="#">unite191</a></li>
                                                <li><a href="#">unite192</a></li>
                                                <li><a href="#">unite193</a></li>
                                                <li><a href="#">unite194</a></li>
                                                <li><a href="#">unite195</a></li>
                                                <li><a href="#">unite196</a></li>
                                                <li><a href="#">unite197</a></li>
                                                <li><a href="#">unite198</a></li>
                                                <li><a href="#">unite199</a></li>
                                                <li><a href="#">unite200</a></li>
                                                <li><a href="#">unite201</a></li>
                                                <li><a href="#">unite202</a></li>
                                                <li><a href="#">unite203</a></li>
                                                <li><a href="#">unite204</a></li>
                                                <li><a href="#">unite205</a></li>
                                                <li><a href="#">unite206</a></li>
                                                <li><a href="#">unite207</a></li>
                                                <li><a href="#">unite208</a></li>
                                                <li><a href="#">unite209</a></li>
                                                <li><a href="#">unite210</a></li>
                                                <li><a href="#">unite211</a></li>
                                                <li><a href="#">unite212</a></li>
                                                <li><a href="#">unite213</a></li>
                                                <li><a href="#">unite214</a></li>
                                                <li><a href="#">unite215</a></li>
                                                <li><a href="#">unite216</a></li>
                                                <li><a href="#">unite217</a></li>
                                                <li><a href="#">unite218</a></li>
                                                <li><a href="#">unite219</a></li>
                                                <li><a href="#">unite220</a></li>
                                                <li><a href="#">unite221</a></li>
                                                <li><a href="#">unite222</a></li>
                                                <li><a href="#">unite223</a></li>
                                                <li><a href="#">unite224</a></li>
                                                <li><a href="#">unite225</a></li>
                                                <li><a href="#">unite226</a></li>
                                                <li><a href="#">unite227</a></li>
                                                <li><a href="#">unite228</a></li>
                                                <li><a href="#">unite229</a></li>
                                                <li><a href="#">unite230</a></li>
                                                <li><a href="#">unite231</a></li>
                                                <li><a href="#">unite232</a></li>
                                                <li><a href="#">unite233</a></li>
                                                <li><a href="#">unite234</a></li>
                                                <li><a href="#">unite235</a></li>
                                                <li><a href="#">unite236</a></li>
                                                <li><a href="#">unite237</a></li>
                                                <li><a href="#">unite238</a></li>
                                                <li><a href="#">unite239</a></li>
                                                <li><a href="#">unite240</a></li>
                                                <li><a href="#">unite241</a></li>
                                                <li><a href="#">unite242</a></li>
                                                <li><a href="#">unite243</a></li>
                                                <li><a href="#">unite244</a></li>
                                                <li><a href="#">unite245</a></li>
                                                <li><a href="#">unite246</a></li>
                                                <li><a href="#">unite247</a></li>
                                                <li><a href="#">unite248</a></li>
                                                <li><a href="#">unite249</a></li>
                                                <li><a href="#">unite250</a></li>
                                                <li><a href="#">unite251</a></li>
                                                <li><a href="#">unite252</a></li>
                                                <li><a href="#">unite253</a></li>
                                                <li><a href="#">unite254</a></li>
                                                <li><a href="#">unite255</a></li>
                                                <li><a href="#">unite256</a></li>
                                                <li><a href="#">unite257</a></li>
                                                <li><a href="#">unite258</a></li>
                                                <li><a href="#">unite259</a></li>
                                                <li><a href="#">unite260</a></li>
                                                <li><a href="#">unite261</a></li>
                                                <li><a href="#">unite262</a></li>
                                                <li><a href="#">unite263</a></li>
                                                <li><a href="#">unite264</a></li>
                                                <li><a href="#">unite265</a></li>
                                                <li><a href="#">unite266</a></li>
                                                <li><a href="#">unite267</a></li>
                                                <li><a href="#">unite268</a></li>
                                                <li><a href="#">unite269</a></li>
                                                <li><a href="#">unite270</a></li>
                                                <li><a href="#">unite271</a></li>
                                                <li><a href="#">unite272</a></li>
                                                <li><a href="#">unite273</a></li>
                                                <li><a href="#">unite274</a></li>
                                                <li><a href="#">unite275</a></li>
                                                <li><a href="#">unite276</a></li>
                                                <li><a href="#">unite277</a></li>
                                                <li><a href="#">unite278</a></li>
                                                <li><a href="#">unite279</a></li>
                                                <li><a href="#">unite280</a></li>
                                                <li><a href="#">unite281</a></li>
                                                <li><a href="#">unite282</a></li>
                                                <li><a href="#">unite283</a></li>
                                                <li><a href="#">unite284</a></li>
                                                <li><a href="#">unite285</a></li>
                                                <li><a href="#">unite286</a></li>
                                                <li><a href="#">unite287</a></li>
                                                <li><a href="#">unite288</a></li>
                                                <li><a href="#">unite289</a></li>
                                                <li><a href="#">unite290</a></li>
                                                <li><a href="#">unite291</a></li>
                                                <li><a href="#">unite292</a></li>
                                                <li><a href="#">unite293</a></li>
                                                <li><a href="#">unite294</a></li>
                                                <li><a href="#">unite295</a></li>
                                                <li><a href="#">unite296</a></li>
                                                <li><a href="#">unite297</a></li>
                                                <li><a href="#">unite298</a></li>
                                                <li><a href="#">unite299</a></li>
                                                <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                    </ul>
                </li>
               
            </ul>
        </div> -->

    </div>
<div class="container" style="position: absolute;bottom:   50;width: 200px; color: white; border-top: solid 2px white; background-color: rgb(8,8,8);">
  <span style="font-size:16px; margin: 2px;" class=" glyphicon glyphicon-import"></span>
  <span style="font-size:16px; margin: 2px;" class="glyphicon glyphicon-pencil"></span>
  <span style="font-size:16px; margin: 2px;" class="showopacity glyphicon glyphicon-trash"></span>
               </div>
</nav>
<div class="container corps" style="position: relative; left: 140px; top: 55px; width: 75%;">
    <div class="row">
    kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde kemoko conde 
    </div>
</div>

<div class=" navbar-fixed-bottom navbar-inverse pied" style="height: 25px; ">
      <div class="container">
        
        <div class="">
          
            <ul class="nav ">
              <li class="col-xs-3"><a href="#Home">Home</a></li>
              <li class="col-xs-3"><a href="#users">Users</a></li>
              <li class="col-xs-3"><a href="http://placesforlove.com">Places</a></li>
            </ul>
          
        </div>
      </div>
    </div>
 

</body>
</html>