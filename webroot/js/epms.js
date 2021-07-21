const EPMS = {
    initialize : function () {
        this.selectMapInputs().on('change', this.selectedMapChoice)
    },
    selectMapInputs: function () {
        return $('select');
    },
    selectedMapChoice: function (e) {
        let value = e.currentTarget.value;
        if(value === ''){
            $(e.currentTarget).removeClass('selected');
            $(e.currentTarget).addClass('unselected');
        }
        else {
            $(e.currentTarget).removeClass('unselected');
            $(e.currentTarget).addClass('selected');
        }
    },
}

EPMS.initialize()
