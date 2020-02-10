/**
 * ローデイング表示ライブラリ
 * v1.0.0 2020/2/8 new Kenji Nakamura
 */

var loadingLib = function() {};

loadingLib.prototype = {
  showLoading: function() {
    $('body').append(
      '<div id="loading_box"><img src="images/ajax-loader.gif"></div>'
    );
  },
  hideLoading: function() {
    $('#loading_box').remove();
  },
};
