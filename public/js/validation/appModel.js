/**
 * v1.0.0 new 2020/2/10 nk
 */

function AppModel(attrs) {
  this.val = '';
  this.listeners = {
    valid: [],
    invalid: [],
  };
}

AppModel.prototype.on = function(event, func) {
  this.listeners[event].push(func);
};

AppModel.prototype.trigger = function(event) {
  $.each(this.listeners[event], function() {
    this();
  });
};
