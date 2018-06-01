(function($) {
    $.widget( "fo.characterPage", {
        options: {
            crntIndex: 0,
            selectors: {}
        },

        _create: function() {
            var widget = this,
                self = $(widget.element),
                pageTitleCont = self.find('.pgTitle .title');

            widget._setSelector('pageTitleCont', pageTitleCont);

            widget._on({
                'click.readoutCont .fa-info-circle': function(event){
                    var crntTrgt = $(event.currentTarget),
                        index = crntTrgt.parents('.readoutCont').index();

                    widget._toggleSubContent(crntTrgt);
                },
                'click.subMenu a': function(event){
                    event.preventDefault();
                    var crntTrgt = $(event.currentTarget),
                        index = crntTrgt.index();

                    widget._toggleContent(index);
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

        _toggleContent: function(index) {
            var widget = this,
                self = $(widget.element),
                pageTitleCont = widget.options.selectors.pageTitleCont,
                mainContent = self.find('.mainContent .contentCont:eq(' + index + ')'),
                title = mainContent.data('title'),
                subContent = self.find('.subContent .contentCont:eq(' + index + ')'),
                subMenuLinks = self.find('.subMenu a:eq(' + index + ')');

            widget._setOption('crntIndex', index);
            pageTitleCont.html(title);
            mainContent.removeClass('hide').siblings('.contentCont').addClass('hide');
            subContent.removeClass('hide').siblings('.contentCont').addClass('hide');
            subMenuLinks.addClass('active').siblings('a').removeClass('active');
        },

        _toggleSubContent: function(crntTrgt) {
            var widget = this,
                self = $(widget.element),
                parentItemCont = $(crntTrgt).closest('.readoutCont'),
                crntIndex = $(parentItemCont).parents('.contentCont').find('.readoutCont').index(parentItemCont),
                subContent = self.find('.subContent .contentCont:eq(' + widget.options.crntIndex + ') .descCont .desc:eq(' + crntIndex + ')');

            parentItemCont.addClass('active').siblings('.readoutCont').removeClass('active');
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