/**
 *  1.0.0 new 2020/2/8 Kenji Nakamura JqueryUIダイアログを使用した社員検索機能
 */

var dialogLib = function() {};

dialogLib.prototype = {
  //変数・定数セクション
  ajaxResponse: {},
  AJAX_URL: 'jquery/getShain',

  //メソッド
  open: function() {
    $('<div id="dialog">').appendTo('body');
    $('#dialog').dialog();
  },

  /**
   *
   * @param {*} data
   */
  ajaxOpen: function(data) {
    var test = this._request(data);
    test.done(function() {
      console.log(this.ajaxResponse);
      $('<div id="dialog"><p>' + this.ajaxResponse[0].id + '</p>').appendTo(
        'body'
      );
      $('#dialog').dialog();
    });
  },

  /**
   *
   */
  close: function() {},

  /**
   * Ajaxでデータを取得します
   * @param {*} data 送信データ
   */
  _request: function(data = {}) {
    return $.ajax({
      type: 'GET',
      url: this.AJAX_URL,
      data: data,
      dataType: 'json',
      success: function(data) {
        this.ajaxResponse = data;
      },
      error: function() {},
    });
  },
};
