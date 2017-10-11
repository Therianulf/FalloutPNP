(function($) {
    $.widget( "fo.skillsPage", {
        options: {
            points: 0,
            maxPoints: 3,
            specializationModifier: 20,
            selectors: {}
        },

        _create: function() {
            var widget = this,
                self = $(widget.element),
                progressVal = self.find('#statProgressVal span'),
                form = self.find('form');

            widget._setSelector('progressVal', progressVal);
            widget._setSelector('form', form);

            widget._on({
                'click.subMenu a': function(event){
                    event.preventDefault();
                    var crntTrgt = $(event.currentTarget);

                    if (!crntTrgt.hasClass('disabled')){
                        if (crntTrgt.hasClass('submit')){
                            widget._submitForm();
                        }
                    }
                },
                'click.checkboxCont .fa-info-circle': function(event){
                    var crntTrgt = $(event.currentTarget),
                        index = crntTrgt.parents('.checkboxCont').index();

                    widget._toggleSubContent(index);
                },
                'change.checkboxCont input[type="checkbox"]': function(event){
                    var crntTrgt = $(event.currentTarget),
                        changeType = (crntTrgt.prop("checked")) ? 'inc' : 'dec';

                    widget._checkboxUpdate(crntTrgt, changeType);
                }
            });
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

        _toggleSubContent: function(index) {
            var widget = this,
                self = $(widget.element),
                checkboxCont = self.find('.checkboxCont:eq(' + index + ')'),
                subContent = self.find('.skillCont .descCont .desc:eq(' + index + ')');

            checkboxCont.addClass('active').siblings('.checkboxCont').removeClass('active');
            subContent.removeClass('hide').siblings('.desc').addClass('hide');
        },

        _checkboxUpdate: function(crntCheckbox, changeType) {
            var widget = this,
                self = $(widget.element),
                input = crntCheckbox.siblings('input'),
                inputVal = parseInt(input.val()),
                points = widget.options.points,
                progressVal = widget.options.selectors.progressVal,
                submitBtn = self.find('.subMenu .submit');


            if (changeType === 'inc'){
                if (points >= widget.options.maxPoints){
                    crntCheckbox.prop('checked', false);
                    return;
                }else{
                    input.val(inputVal + 20);
                    points++;
                }
            }else{
                input.val(inputVal - 20);
                points--;
            }

            widget._setOption('points', points);

            var valString = points + "/" + widget.options.maxPoints;
            progressVal.html(valString);

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
        $("[data-role='skillsPage']").each(function () {
            $(this).skillsPage();
        });
    });
})(jQuery);