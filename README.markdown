CartThrob Percentage Option
===========================

*Note that this was created for a very specific situation, and may not be generally applicable.*

If you still want to try: You need to create an item option with a name that ends in "pct". Then make sure each of the possible option names has a number in it, which will be used as the percentage to increase the base price by. 

Sample Code
-----------

    <select name="item_options[gratuity_pct]">
        <option value="">Pay gratuity at event</option>
        <option value="grat_15">Add 15% gratuity</option>
        <option value="grat_18">Add 18% gratuity</option>
        <option value="grat_20">Add 20% gratuity</option>
    </select>