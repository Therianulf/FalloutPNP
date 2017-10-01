/**
 * Created by therian on 3/26/2017.
 */

/*var globalParamTotal = 0; //this has to exist outside of the function
$( document ).ready(
    function(){
        $(":input[type='number']").bind('keyup mouseup', function (event) {
            checkTotal();
        });
    }
);

function checkTotal(){
    var numberInputs = $(document).find(":input[type='number']"),
        localParamTotal = 0;
    $.each(numberInputs, function(index, obj){
        var currentVal = parseInt($(obj).val(),10);
        localParamTotal = localParamTotal + currentVal;
    });

    $(document).find("#character_total_points").text(localParamTotal);
    $(document).find("#character_total_left").text(40 - localParamTotal);
    globalParamTotal = localParamTotal;
}*/

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
                submitBtn = self.find('.formSubmit');

            submitBtn.addClass('disabled');
            widget._setSelector('progressBar', progressBar);
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
                if ($(event.currentTarget).hasClass('disabled')){
                    event.preventDefault();
                }else{
                    widget.submitForm();
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

        _spinnerUpdate: function(currentTarget) {
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
                action = $(form).attr('action'),
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