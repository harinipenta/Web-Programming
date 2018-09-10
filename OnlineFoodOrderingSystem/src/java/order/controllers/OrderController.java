package order.controllers;

import java.util.List;
import java.util.HashMap;
import java.util.Map;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.servlet.ModelAndView;
import order.beans.Order;
import order.dao.OrderDao;

@Controller
public class OrderController {

    @Autowired
    OrderDao dao;

    //Storing the type of food products in HashMap
    @ModelAttribute("typeList")
    public Map<String, String> typeList() {
        Map<String, String> typeList = new HashMap<String, String>();
        typeList.put("S", "Pizza");
        typeList.put("M", "Burger");
        typeList.put("L", "Chicken Wings");
        return typeList;
    }

    //Generate the New order form
    @RequestMapping("/orderform")
    public ModelAndView showorderform() {
        return new ModelAndView("orderform", "command", new Order());
    }

    //Creating a submit Request
    @RequestMapping("/submitorder")
    public ModelAndView showsubmitform() {
        return new ModelAndView("submitorder", "command", new Order());
    }

    //Validation of order Number
    @RequestMapping("/validorderno")
    public ModelAndView showerrormessage() {
        return new ModelAndView("validorderno");
    }

    //Order Checkout form
    @RequestMapping("/checkout")
    public ModelAndView showcheckoutform() {
        return new ModelAndView("checkout");
    }

    //Saving the Order Details in the Data Base
    @RequestMapping(value = "/save", method = RequestMethod.POST)
    public ModelAndView save(@ModelAttribute("order") Order order) {
        dao.save(order);
        return new ModelAndView("redirect:/vieworder");

    }

    //Display the order details,Once you confirm the items
    @RequestMapping("/vieworder")
    public ModelAndView vieworder() {
        List<Order> list = dao.getOrderDetails();
        return new ModelAndView("vieworder", "list", list);
    }

    //Submitting the order
    @RequestMapping(value = "/confirm", method = RequestMethod.POST)
    public ModelAndView checkout(@ModelAttribute("order") Order order) {
        List<Order> list = dao.getOrdercheckout(order);
        int x = dao.check(order);
        if (x !=0) {
            dao.delete(order);
            return new ModelAndView("checkout", "list", list);
        } else {
            return new ModelAndView("validorderno", "list", list);
        }

    }

}
