/**
 * Live filter the available options for select inputs.
 *
 * This is written with a one major limitation.
 *
 * It works against ALL inputs in the document and
 *    assumes they all start with identical options.
 *
 * It would be fairly easy to add a parameter to the initialize()
 * that would be the node containing the selects to operate on.
 * Or ideally, learn how to use js constructors and then you
 * could instantiate copies of Selectorama to work on
 * different sets of select inputs.
 *
 * @type {{masterOptionsList: *[], getSelects: (function(): *|jQuery), selectFocus: Selectorama.selectFocus, cloneOptionsSet: (function(*=): *), getUsedValues: (function(): {}), initialize: Selectorama.initialize}}
 */
const Selectorama = {
    initialize : function () {
        this.masterOptionsList = this.cloneOptionsSet(this.getSelects()[0]);
        $(this.getSelects()).on('focus', this.selectFocus);
    },
    /**
     * copies of all distinct 'option' nodes found on a fresh page
     */
    masterOptionsList : [],
    /**
     * return all select nodes in the documnent
     * @returns {*|jQuery}
     */
    getSelects : function() {
        return $(document).find('select');
    },
    /**
     * All currently selected values become keys of the object with a value of true
     *
     * @returns {{}}
     */
    getUsedValues : function() {
        let selects = this.getSelects();
        let result = {};
        for (let i = 0; i < selects.length; i++) {
            let v = selects[i].value;
            result[v] = true;
        }
        return result;
    },
    /**
     * When a select gets focus, built a filtered list of options for it
     *
     * The filtered list will only show choices not currently
     * the chosen value in other select inputs
     * @param e
     */
    selectFocus : function(e) {
        let usedValues = Selectorama.getUsedValues();
        //always allow 'choose one' and current choice as choices
        usedValues[''] = false;
        usedValues[e.currentTarget.value] = false;

        let currentSelect = $(e.currentTarget);
        let freshOptions = Selectorama.masterOptionsList.clone();
        let availableOptions = [];
        let x = 0;

        for (let i = 0; i < freshOptions.length; i++) {
            if (!usedValues[freshOptions[i].value]) {
                availableOptions[x++] = freshOptions[i];
            }
        }
        currentSelect.find('option').remove();
        currentSelect.prepend(availableOptions);
    },
    /**
     * clone the option nodes found in a given select node
     * @param selectNode
     * @returns {*}
     */
    cloneOptionsSet : function(selectNode) {
        let options = $(selectNode).find('option');
        return options.clone()
    },
}

Selectorama.initialize();
