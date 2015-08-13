var ractive;

ractive = new Ractive({
  el: '#container',
  template: '#template',
  data: {
    keycode: null,
    selectedIndex: -1,
    isOpened: false,
    selectedText: 'Select from dropdown',
    items: ['LG','Apple','Motorola','Sony']
	}
});

ractive.setActiveItem = function(index) {
  
  // set the explicit index if it has been passed
  if(typeof(index)!='undefined') {
    this.set('selectedIndex', index);
  }

  var currentIndex = this.get('selectedIndex');
  var items = this.get('items');
  var defaultText = this.get('selectedText');

  /*console.info(currentIndex);
  console.info(items[currentIndex]);*/

  if( currentIndex > -1 && currentIndex <= items.length ) {
    this.set({
      selectedIndex: currentIndex,
      selectedText: items[currentIndex]
    });
  } 
  else {
    this.set('selectedText',defaultText);
  }
  
};

ractive.on('selectItem',function(event, index) {
  console.info(index);
  this.set('isOpened',!this.get('isOpened'));
  this.setActiveItem(index);
});

ractive.on('moveDown', function(event) {
  var currentIndex = this.get('selectedIndex');
  this.set('selectedIndex', currentIndex+1);
}); 

ractive.on('moveUp', function(event) {
  var currentIndex = this.get('selectedIndex');  
  this.set('selectedIndex', currentIndex-1);
});