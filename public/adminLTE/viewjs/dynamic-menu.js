var url = window.location;
var dir = url.href.substring(0,url.href.indexOf('/') + 1);
var path = url.href.substring(url.href.lastIndexOf('/') +1);
// for sidebar menu entirely but not cover treeview
$('ul.nav-sidebar a').filter(function() {
    if (this.href) {
      arr = this.href.split("/");
      str = arr[arr.length - 1].split('.')[0];
      if(arr.length == 7){
        this.href = dir + arr[arr.length - 2] + '/' + str;
      } else {
        this.href = dir + str;
      }
      return str.indexOf(path) == 0;
    }
}).addClass('active');

// for the treeview
$('ul.nav-treeview a').filter(function() {
    if (this.href) {
        return this.href.substring(this.href.lastIndexOf('/') + 1).indexOf(path) == 0;
    }
}).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');     
