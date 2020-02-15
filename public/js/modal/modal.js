function Modal(el) {
  this.initialize(el);
}

/**
 * 初期設定
 * @param htmlElement HTML要素
 */
Modal.prototype.initialize = function(el) {
  this.$el = $(el);
  this.$container = $('#modal');
  this.$contents = $('#modal__contents');
  this.$close = $('#modal__close');
  this.$prev = $('#modal__prev');
  this.$next = $('#modal__next');
  this.$overlay = $('#modal-overlay');
  this.$window = $(window);
  this.handleEvents();
};

/**
 * イベント設定
 */
Modal.prototype.handleEvents = function() {
  var self = this;
  this.$el.on('click', function(e) {
    self.show(e);
    return false;
  });
  this.$close.on('click', function(e) {
    self.hide(e);
    return false;
  });
  this.$overlay.on('click', function(e) {
    self.hide(e);
    return false;
  });
  this.$next.on('click', function(e) {
    self.next(e);
    return false;
  });
  this.$prev.on('click', function(e) {
    self.prev(e);
    return false;
  });
};

/**
 * モーダルオープン
 * @event
 */
Modal.prototype.show = function(e) {
  var $target = $(e.currentTarget);
  var src = $target.attr('href');
  this.$contents.html('<img src=' + src + '>');
  this.$container.fadeIn();
  this.$overlay.fadeIn();
  //　クロージャでインデックスを保持する
  var index = $target.data('index');
  this.countChange = this.createCounter(index, this.$el.length);
};

/**
 * モーダルクローズ
 */
Modal.prototype.hide = function(e) {
  this.$container.fadeOut();
  this.$overlay.fadeOut();
  return false;
};

Modal.prototype.createCounter = function(index, len) {
  return function(num) {
    index = (num + index + len) % len;
    return index;
  };
};

/**
 * 次の画像を表示
 */
Modal.prototype.next = function(e) {
  this.slide(this.countChange(1));
};

/**
 * 前の画像を表示
 */
Modal.prototype.prev = function(e) {
  this.slide(this.countChange(-1));
};

/**
 * 画像の入れ替え
 */
Modal.prototype.slide = function(index) {
  // 現在の画像表示をオフ
  this.$contents.find('img').fadeOut({
    complete: function() {
      // インデックス画像を取得
      var src = $('[data-index="' + index + '"]')
        .find('img')
        .attr('src');
      // 画像を表示する
      $(this)
        .attr('src', src)
        .fadeIn();
    },
  });
};
