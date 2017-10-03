(function($) {
    $.widget( "fo.attributesPage", {
        options: {
            points: 0,
            maxPoints: 40,
            selectors: {}
        },

        _create: function() {
            var widget = this,
                self = $(widget.element),
                sectionCont = self.find('#sectionCont'),
                spinnerInputs = self.find("[data-role='spinner']"),
                progressBar = self.find('#statProgressBar'),
                form = self.find('form'),
                submitBtn = self.find('.formSubmit');

            submitBtn.addClass('disabled');
            widget._setSelector('progressBar', progressBar);
            widget._setSelector('form', form);
            widget._setSelector('submitBtn', submitBtn);
            sectionCont.accordion();
            spinnerInputs.each(function(){
                $(this).spinner({
                    min: 0,
                    stop: function( event, ui ) {
                        widget._spinnerUpdate($(event.currentTarget));
                    }
                });
            });
            submitBtn.on('click', function(event){
                event.preventDefault();
                if (!$(event.currentTarget).hasClass('disabled')){
                    widget._submitForm();
                }
            });
            widget._updateProgressBar();
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

        _updateProgressBar: function() {
            var widget = this,
                points = ((widget.options.points/widget.options.maxPoints) * 100),
                progressBar = widget.options.selectors.progressBar;

            progressBar.progressbar({value: points});
        },

        _spinnerUpdate: function() {
            var widget = this,
                points = 0,
                spinners = $(widget.element).find("[data-role='spinner']"),
                submitBtn = widget.options.selectors.submitBtn;

            spinners.each(function(){
                var value = parseInt($(this).val());
                value = (value) ? value : 0;
                points = points + value;
            });

            widget._setOption('points', points);

            if (!(points > widget.options.maxPoints)){
                widget._updateProgressBar();
            }
            if (points === widget.options.maxPoints){
                submitBtn.removeClass('disabled');
            }else{
                submitBtn.addClass('disabled');
            }
        },

        _submitForm: function(){
            var widget = this,
                form = widget.options.selectors.form,
                action = $(form).attr('action');
                data = form.serialize();

            var promise = widget._ajax(action, data, false);

            promise.done(function(data){}).fail(function(){});
        }

    });
    $(document).ready(function(){
        $("[data-role='attributesPage']").each(function () {
            $(this).attributesPage();
        });
    });
})(jQuery);