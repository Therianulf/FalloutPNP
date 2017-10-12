(function($) {
    $.widget( "fo.attributesPage", {
        options: {
            activeIndex: 0,
            points: 0,
            maxPoints: 40,
            selectors: {}
        },

        _create: function() {
            var widget = this,
                self = $(widget.element),
                pageTitleCont = self.find('.pgTitle .title'),
                spinnerInputs = self.find("[data-role='spinner']"),
                progressBar = self.find('#statProgressBar'),
                progressVal = self.find('#statProgressVal span'),
                form = self.find('form');
          
            widget._setSelector('pageTitleCont', pageTitleCont);
            widget._setSelector('progressBar', progressBar);
            widget._setSelector('progressVal', progressVal);
            widget._setSelector('form', form);

            spinnerInputs.each(function(){
                $(this).spinner({
                    min: 0,
                    stop: function( event, ui ) {
                        widget._spinnerUpdate($(event.currentTarget));
                    }
                });
            });
            widget._on({
                'click.subMenu a': function(event){
                    event.preventDefault();
                    var crntTrgt = $(event.currentTarget),
                        index = crntTrgt.index();

                    if (!crntTrgt.hasClass('disabled')){
                        if (crntTrgt.hasClass('submit')){
                            widget._submitForm();
                        }else{
                            widget._toggleContent(index);
                        }
                    }
                },
                'click.spinnerCont .fa-info-circle': function(event){
                    var crntTrgt = $(event.currentTarget),
                        index = crntTrgt.parents('.spinnerCont').index();

                    widget._toggleSubContent(index);
                },
                'blur.step1 input': function(event){
                    widget._checkStepOneInput();
                },
                'blur.step1 textarea': function(event){
                    widget._checkStepOneInput();
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
            widget._calcPoints();
            widget._updateProgressBar();
            $(widget.element).trigger('endSibLife');
        },

        _setOption: function( key, value ) {
            this._super( key, value );
        },

        _setSelector: function (key, value) {
            var selectors = this.options.selectors;
            selectors[key] = value;
        },

        _ajax: function(url, data, cache) {
            return $.ajax({
                url: url,
                data: data,
                type: "POST",
                cache: cache,
                dataType: "json"
            });
        },

        _checkStepOneInput: function(){
            var widget = this,
                self = $(widget.element),
                inputs = self.find('.step1 input'),
                textarea = self.find('.step1 textarea'),
                step2Link = self.find('.subMenu .step2'),
                regexTest = /^.{3,}$/,
                enable = true;

            $.each(inputs, function( index, input ){
                var val = $(input).val(),
                    re = new RegExp(regexTest);
                if (!re.test(val)){
                    enable = false;
                }
            });

            if (enable){
                var val = $(textarea).val(),
                    re = new RegExp(regexTest);
                if (!re.test(val)){
                    enable = false;
                }
            }

            if (enable){
                step2Link.removeClass('disabled');
            }else{
                step2Link.addClass('disabled');
            }
        },

        _toggleContent: function(index) {
            var widget = this,
                self = $(widget.element),
                pageTitleCont = widget.options.selectors.pageTitleCont,
                mainContent = self.find('.mainContent .contentCont:eq(' + index + ')'),
                title = mainContent.data('title'),
                subContent = self.find('.subContent .contentCont:eq(' + index + ')'),
                subMenuLinks = self.find('.subMenu a:eq(' + index + ')');

            pageTitleCont.html(title);
            mainContent.removeClass('hide').siblings('.contentCont').addClass('hide');
            subContent.removeClass('hide').siblings('.contentCont').addClass('hide');
            subMenuLinks.addClass('active').siblings('a').removeClass('active');
        },

        _toggleSubContent: function(index) {
            var widget = this,
                self = $(widget.element),
                spinnerCont = self.find('.spinnerCont:eq(' + index + ')'),
                subContent = self.find('.specialCont .descCont .desc:eq(' + index + ')');

            spinnerCont.addClass('active').siblings('.spinnerCont').removeClass('active');
            subContent.removeClass('hide').siblings('.desc').addClass('hide');
        },

        _updateProgressBar: function() {
            var widget = this,
                points = ((widget.options.points/widget.options.maxPoints) * 100),
                progressBar = widget.options.selectors.progressBar;

            progressBar.progressbar({value: points});
        },

        _calcPoints: function() {
            var widget = this,
                self = $(widget.element),
                points = 0,
                progressVal = widget.options.selectors.progressVal,
                spinners = self.find("[data-role='spinner']");

            spinners.each(function(){
                var value = parseInt($(this).val());
                value = (value) ? value : 0;
                points = points + value;
            });

            widget._setOption('points', points);

            var valString = widget.options.points + "/" + widget.options.maxPoints;
            progressVal.html(valString);
        },

        _spinnerUpdate: function() {
            var widget = this,
                self = $(widget.element),
                submitBtn = self.find('.subMenu .submit');

            widget._calcPoints();

            if (!(widget.options.points > widget.options.maxPoints)){
                widget._updateProgressBar();
            }
            if (widget.options.points === widget.options.maxPoints){
                submitBtn.removeClass('disabled');
            }else{
                submitBtn.addClass('disabled');
            }
        },

        _submitForm: function(){
            var widget = this,
                self = $(widget.element),
                form = widget.options.selectors.form,
                action = $(form).attr('action');
                data = form.serialize();



            var promise = widget._ajax(action, data, false);

            promise.done(function(data){
                $('#app').append($.parseJSON(data));
                setTimeout(function(){
                    var pageChildren = self.siblings('.pageCont');

                    $.each(pageChildren, function(key, value){
                        var role = $(value).data('role');
                        $(value)[role]();
                    });
                }, 600);
            }).fail(function(){});
        }

    });
    $(document).ready(function(){
        $("[data-role='attributesPage']").each(function () {
            $(this).attributesPage();
        });
    });
})(jQuery);