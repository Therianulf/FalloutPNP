(function($) {
    $.widget( "fo.characterPage", {
        options: {
            selectors: {}
        },

        _create: function() {
            var widget = this,
                self = $(widget.element);
console.log("INIT");
            widget._on({
                'click.checkboxCont .fa-info-circle': function(event){
                    var crntTrgt = $(event.currentTarget),
                        index = crntTrgt.parents('.checkboxCont').index();

                    widget._toggleSubContent(index);
                },
                'endSibLife': function(){
                    var pageChildren = self.siblings('.pageCont');

                    $.each(pageChildren, function(key, value){
                        $(value).trigger('endLife');
                    });
                },
                'endLife': function(){
                    $(self).remove();
                }
            });
            $(widget.element).trigger('endSibLife');
        },

        _setOption: function( key, value ) {
            this._super( key, value );
        },

        _setSelector: function (key, value) {
            var selectors = this.options.selectors;
            selectors[key] = value;
        },

        _toggleSubContent: function(index) {
            var widget = this,
                self = $(widget.element),
                checkboxCont = self.find('.checkboxCont:eq(' + index + ')'),
                subContent = self.find('.skillCont .descCont .desc:eq(' + index + ')');

            checkboxCont.addClass('active').siblings('.checkboxCont').removeClass('active');
            subContent.removeClass('hide').siblings('.desc').addClass('hide');
        }

    });
    $(document).ready(function(){
        $("[data-role='characterPage']").each(function () {
            console.log("Found");
            $(this).characterPage();
        });
    });
})(jQuery);