// 文件名：​​set-all-links-blank.js​
function setAllLinksToBlank() {}
  var links = document.getElementsByTagName('a');
  for (var i = 0; i < links.length; i++) 
  {
    links[i].target = '_blank';
  }