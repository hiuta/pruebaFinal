<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      body {
        background-color: #7FFF00;
      }
    </style>
  </head>
  <body>
    <p style="text-align:center">MENU</p>
  </body>


  <script
    type="module"
    src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"
  ></script>


  <model-viewer
    src="https://cdn.glitch.com/21fc0c22-5a20-401b-9c14-27e4b09c5cee%2Fdise%C3%B1o1.glb?v=1625718636310"
    camera-controls
    ar
    ar-modes="scene-viewer webxr quick-look"
    exposure="2"
    shadow-intensity="10"
    auto-rotate
    camera-orbit="-165.6deg 72.9deg 10.18m"
    min-camera-orbit="auto auto auto"
    max-camera-orbit="auto auto 10.18m"
  >
  
    <button
      class="Hotspot"
      slot="hotspot-1"
      data-position="0.41362748396824145m 0.09571763456859594m -1.7772858150362352m"
      data-normal="0m 0m -1m"
      data-visibility-attribute="visible"
    >
      <div class="HotspotAnnotation">Sushi</div>
    </button>
    <div class="progress-bar hide" slot="progress-bar">
      <div class="update-bar"></div>
    </div>
    <button slot="ar-button" id="ar-button"></button>
    <div id="ar-prompt"></div>
  </model-viewer>





  <model-viewer
src="https://cdn.glitch.com/21fc0c22-5a20-401b-9c14-27e4b09c5cee%2Fdise%C3%B1o3.glb?v=1625719142803"
    camera-controls
    ar
    ar-modes="scene-viewer webxr quick-look"
    shadow-intensity="6.8"
    auto-rotate
    min-camera-orbit="auto auto auto"
    max-camera-orbit="auto auto auto"
    min-field-of-view="auto"
    max-field-of-view="auto"
  >
    <button
      class="Hotspot"
      slot="hotspot-1"
      data-position="-101.93496670311121m 71.21867489813562m -85.40263560550754m"
      data-normal="-0.48162523135549573m 0.8670816324016661m -0.12730506381690943m"
      data-visibility-attribute="visible"
    >
      <div class="HotspotAnnotation">Helado</div>
    </button>
    <div class="progress-bar hide" slot="progress-bar">
      <div class="update-bar"></div>
    </div>
  </model-viewer>






  <model-viewer
    src="https://cdn.glitch.com/21fc0c22-5a20-401b-9c14-27e4b09c5cee%2Fdise%C3%B1o5.glb?v=1625719424974"
    camera-controls
    ar
    ar-modes="scene-viewer webxr quick-look"
    shadow-intensity="5.2"
  >
    <button
      class="Hotspot"
      slot="hotspot-1"
      data-position="-9.152706796937736m 29.983734758202612m 12.883982047843585m"
      data-normal="-0.7709680204067565m 0.14776850314398735m 0.61949397171294m"
      data-visibility-attribute="visible"
    >
      <div class="HotspotAnnotation">Postre</div>
    </button>
    <div class="progress-bar hide" slot="progress-bar">
      <div class="update-bar"></div>
    </div>
  </model-viewer>





  <model-viewer
    src="https://cdn.glitch.com/21fc0c22-5a20-401b-9c14-27e4b09c5cee%2Fdise%C3%B1o6.glb?v=1625719765814"
    camera-controls
    ar
    ar-modes="scene-viewer webxr quick-look"
    exposure="1.31"
    shadow-intensity="3.6"
    auto-rotate
  >
    <button
      class="Hotspot"
      slot="hotspot-1"
      data-position="-77.03225826288264m 30.845228672362687m 124.52254989321307m"
      data-normal="-0.03838980213065772m 0.998244819953794m 0.045094373571285734m"
      data-visibility-attribute="visible"
    >
      <div class="HotspotAnnotation">Desayuno</div>
    </button>
    <div class="progress-bar hide" slot="progress-bar">
      <div class="update-bar"></div>
    </div>
    <button slot="ar-button"></button>
  </model-viewer>
</html>
