<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GARDEN: Geospatial Archive Resource and Data Exchange Network</title>
<link href="css/garden.css" rel="stylesheet" type="text/css" />
</head>

<body id="use">
<div id="globe-bg"></div>
<div id="container" align="center">

  <div id="header"><img src="images/garden-header.png" alt="Garden: Geospatial Archive Resource and Data Exchange Network" width="985" height="96" border="0" usemap="#Map" />
    <map name="Map" id="Map">
      <area shape="rect" coords="809,11,961,42" href="http://www.vt.edu/" target="_parent" alt="Virginia Tech" title="Virginia Tech" />
      <area shape="poly" coords="81,81,26,82,53,50,97,10,146,23,201,31,209,56,602,59,603,81" href="index.php" target="_parent" alt="Garden: Geospatial Archive Resource and Data Exchange Network" title="Garden: Geospatial Archive Resource and Data Exchange Network" />
    </map>
  </div>
  <div id="text-body-bg">
  <div id="nav-bg">
    <div id="text-top-image"><img src="images/garden-body-top.png" width="961" height="169" alt="Garden: Geospatial Archive Resource and Data Exchange Network" /></div>
       	  <div id="text-body">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top"><div id="left-nav">
<?php include 'includes/left-nav.php'; ?>
    </div></td>
<td rowspan="2" align="left" valign="top"><div id="text-body-right">
  <h1>Instructions for Use</h1>

  <img src="images/layer-timeline.png" alt="GIS Layers Timeline" width="312" height="261" class="image-right" />
  <p>Data published through this site may be used directly in GIS clients   such as ArcGIS Desktop, or embedded in Web Mapping Applications via APIs   such as ESRI's ArcGIS API for JavaScript. </p>
  <p>To create a stored connection to this server that can be used in ArcMap, do the following: </p>
  <ul>
    <li> In ArcCatalog, expand the catalog tree entry for &quot;GIS Servers&quot; and double-click &quot;Add ArcGIS Server&quot;. </li>
    <li>Select the radio button to &quot;Use ArcGIS Services&quot; and click Next.</li>
    <li>Select the radio button for &quot;Internet&quot;. Then
      <ul>
        <li>For the Server URL field, enter <br />
          http://garden.gis.vt.edu/arcgis/services</li>
        <li>Under &quot;Authentication (optional)&quot;: Leave Username and Password blank.</li>
        <li>Click &quot;Finish&quot;.</li>
      </ul>
    </li>
    <li>You now should have a connection entry for this server in your   catalog tree, with a name similar to &quot;arcgis on garden.gis.vt.edu&quot;. This is a one-time operation; you will re-use this connection every time you want to use data from our site.</li>
    <li>In ArcMap, you may now browse to this connection under the   Catalog tree when you click the &quot;Add Data&quot; button, and then navigate to   the services you wish to consume as basemap layers in your map.</li>
  </ul>
  <hr />
  <p>For web mapping applications, use the REST endpoint instead.  Each   map service on this server is accessible via a URL of the form</p>
  <p><strong>http://garden.gis.vt.edu/arcgis/rest/services/&lt;folder name&gt;/&lt;service_name&gt;/MapServer</strong><br />
  </p>
  <p>Thus, the Web Mercator version of the MostRecentImagery service would be referenced as follows: <br />
  </p>
  <p><strong>http://garden.gis.vt.edu/arcgis/rest/services/MostRecentImagery/MostRecentImagery_WGS/MapServer </strong></p>
  <p>As an example, if you were developing a web application using the   ArcGIS API for JavaScript, you might add the above layer using the   following reference:</p>
  <blockquote><pre><code>
    <p> require(["esri/layers/TileLayer"], function(TileLayer) {
  &nbsp;&nbsp;var layer = new TileLayer({
    &nbsp;&nbsp;&nbsp;&nbsp;url: "http://garden.gis.vt.edu/arcgis/rest/services/MostRecentImagery/MostRecentImagery_WGS/MapServer"
  &nbsp;&nbsp;});
  // Add layer to map
});;</p>
  </code></pre></blockquote>
  <p>See <a href="https://developers.arcgis.com/web-api/">https://developers.arcgis.com/web-api/</a> for more information on embedding published map services from this system into ArcGIS Web API applications.</p>
  <p>&nbsp;</p>
  <p><br />
    <br />
    <br />
    <br />
  </p>
</div></td>
  </tr>
  <tr>
    <td align="left" valign="bottom">
    <div id="contact">Enterprise GIS
      <br />      Andrews Information Systems Building
<br />1700 Pratt Drive (0214)<br />

Blacksburg, VA 24061<br />
<br />
<a href="http://www.gis.vt.edu/contact/" title="Email the Enterprise GIS Team">Email the EGIS</a> <br />
or call us at (540) 231-2178</div>
</td>
    </tr>
          </table>             
              
      </div>
    </div>
  </div>
    <div id="text-body-footer">
    
    	<div id="footer-text">© Virginia Polytechnic Institute and State University, <a href="http://www.gis.vt.edu/contact/" title="Email the Enterprise GIS Team">EGIS</a>, <a href="http://www.gis.vt.edu/privacy/">Privacy Statement</a><br />
Designed by <a href="http://www.gis.vt.edu/contact/webmaster.php">Program Webmaster</a><br />
<a href="http://www.gis.vt.edu/" target="_blank">Virginia Tech Enterprise GIS</a></div>
    
  </div>

</div>
</body>
</html>
