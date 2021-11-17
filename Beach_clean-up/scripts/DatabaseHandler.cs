using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.Networking;

public class DatabaseHandler : MonoBehaviour
{

    public static DatabaseHandler instance;
    private bool _userExists;
    private string _urlInsert = "https://www.happycoral.tk/garbage_collect2/InsertData.php";
    private string _urlSelect = "https://www.happycoral.tk/garbage_collect2/SelectData.php";
    private string _urlUpdate = "https://www.happycoral.tk/garbage_collect2/UpdateData.php";
    private string _urlGetAllData = "https://www.happycoral.tk/garbage_collect2/GetAllData.php";
    public new string name;
    private string whereField = "name";
    public string receivedData;
    public string[] allData;
    public int quantity;
    public int BottleCap_metal;
    public int BottleCap_plastic;
    public int Cans;
    public int CigButt;
    public int Cig_pack;
    public int Clothes;
    public int Construction;
    public int FishGear;
    public int FoodCon_foam;
    public int FoodCon_plastic;
    public int FoodWrap;
    public int GlassBottle;
    public int Lighter;
    public int Masks;
    public int OtherPack;
    public int OtherTrash;
    public int Paper;
    public int Pen;
    public int PlasticBottle;
    public int PlasticBag;
    public int PlateCup;
    public int Shoes;
    public int Straws;
    public int Toy;
    public int Utensils;

    private Leaderboard bitnami_wordpress;
    private void Awake()
    {
        if (instance == null)
            instance = this;
        bitnami_wordpress = FindObjectOfType<Leaderboard>();
    }

    public void InsertDataInDB(string name, int quantity, int BottleCap_metal, int BottleCap_plastic, int Cans, int CigButt, int Cig_pack, int Clothes, int Construction, int FishGear, int FoodCon_foam, int FoodCon_plastic, int FoodWrap, int GlassBottle, int Lighter, int Masks, int OtherPack, int OtherTrash, int Paper, int Pen, int PlasticBottle, int PlasticBag, int PlateCup, int Shoes, int Straws, int Toy, int Utensils)
    {
        WWWForm form = new WWWForm();
        form.AddField("Name", name);
        form.AddField("Quantity", quantity);
        form.AddField("BottleCap_metal", BottleCap_metal);
        form.AddField("BottleCap_plastic", BottleCap_plastic);
        form.AddField("Cans", Cans);
        form.AddField("CigButt", CigButt);
        form.AddField("Cig_pack", Cig_pack);
        form.AddField("Clothes", Clothes);
        form.AddField("Construction", Construction);
        form.AddField("FishGear", FishGear);
        form.AddField("FoodCon_foam", FoodCon_foam);
        form.AddField("FoodCon_plastic", FoodCon_plastic);
        form.AddField("FoodWrap", FoodWrap);
        form.AddField("GlassBottle", GlassBottle);
        form.AddField("Lighter", Lighter);
        form.AddField("Masks", Masks);
        form.AddField("OtherPack", OtherPack);
        form.AddField("OtherTrash", OtherTrash);
        form.AddField("Paper", Paper);
        form.AddField("Pen", Pen);
        form.AddField("PlasticBottle", PlasticBottle);
        form.AddField("PlasticBag", PlasticBag);
        form.AddField("PlateCup", PlateCup);
        form.AddField("Shoes", Shoes);
        form.AddField("Straws", Straws);
        form.AddField("Toy", Toy);
        form.AddField("Utensils", Utensils);


        WWW www = new WWW(_urlInsert, form);
    }
    public void UpdateDataInDB(string email, int quantity, int BottleCap_metal, int BottleCap_plastic, int Cans, int CigButt, int Cig_pack, int Clothes, int Construction, int FishGear, int FoodCon_foam, int FoodCon_plastic, int FoodWrap, int GlassBottle, int Lighter, int Masks, int OtherPack, int OtherTrash, int Paper, int Pen, int PlasticBottle, int PlasticBag, int PlateCup, int Shoes, int Straws, int Toy, int Utensils)
    {
        WWWForm form = new WWWForm();
        form.AddField("Name", email);
        form.AddField("NewQuantity", quantity);
        form.AddField("BottleCap_metal", BottleCap_metal);
        form.AddField("BottleCap_plastic", BottleCap_plastic);
        form.AddField("Cans", Cans);
        form.AddField("CigButt", CigButt);
        form.AddField("Cig_pack", Cig_pack);
        form.AddField("Clothes", Clothes);
        form.AddField("Construction", Construction);
        form.AddField("FishGear", FishGear);
        form.AddField("FoodCon_foam", FoodCon_foam);
        form.AddField("FoodCon_plastic", FoodCon_plastic);
        form.AddField("FoodWrap", FoodWrap);
        form.AddField("GlassBottle", GlassBottle);
        form.AddField("Lighter", Lighter);
        form.AddField("Masks", Masks);
        form.AddField("OtherPack", OtherPack);
        form.AddField("OtherTrash", OtherTrash);
        form.AddField("Paper", Paper);
        form.AddField("Pen", Pen);
        form.AddField("PlasticBottle", PlasticBottle);
        form.AddField("PlasticBag", PlasticBag);
        form.AddField("PlateCup", PlateCup);
        form.AddField("Shoes", Shoes);
        form.AddField("Straws", Straws);
        form.AddField("Toy", Toy);
        form.AddField("Utensils", Utensils);

        WWW www = new WWW(_urlUpdate, form);
    }
    private IEnumerator ICheckIfUserAlreadyExistsInTheDB(string field, string name)
    {
        WWWForm form = new WWWForm();
        form.AddField("Field", field);
        form.AddField("Name", name);

        WWW users = new WWW(_urlSelect, form);
        yield return users;

        receivedData = users.text;

        _userExists = (receivedData == name) ? true : false;
    }
    public void CheckIfUserAlreadyExistsInTheDB(string whereField, string name)
    {
        StartCoroutine(ICheckIfUserAlreadyExistsInTheDB(whereField, name));
    }

    public void UpdateUserDatabase(string name, int quantity, int BottleCap_metal, int BottleCap_plastic, int Cans, int CigButt, int Cig_pack, int Clothes, int Construction, int FishGear, int FoodCon_foam, int FoodCon_plastic, int FoodWrap, int GlassBottle, int Lighter, int Masks, int OtherPack, int OtherTrash, int Paper, int Pen, int PlasticBottle, int PlasticBag, int PlateCup, int Shoes, int Straws, int Toy, int Utensils)
    {
        StartCoroutine(IUpdateUserDatabase(name, quantity, BottleCap_metal, BottleCap_plastic, Cans, CigButt, Cig_pack, Clothes, Construction, FishGear, FoodCon_foam, FoodCon_plastic, FoodWrap, GlassBottle, Lighter, Masks, OtherPack, OtherTrash, Paper, Shoes, Pen, PlasticBottle, PlasticBag, PlateCup, Straws, Toy, Utensils));
    }
    private IEnumerator IUpdateUserDatabase(string name, int quantity, int BottleCap_metal, int BottleCap_plastic, int Cans, int CigButt, int Cig_pack, int Clothes, int Construction, int FishGear, int FoodCon_foam, int FoodCon_plastic, int FoodWrap, int GlassBottle, int Lighter, int Masks, int OtherPack, int OtherTrash, int Paper, int Pen, int PlasticBottle, int PlasticBag, int PlateCup, int Shoes, int Straws, int Toy, int Utensils)
    {
        CheckIfUserAlreadyExistsInTheDB(whereField, name);
        yield return new WaitForSeconds(2f);
        if (_userExists)
        {
            // Update the existing user data
            UpdateDataInDB(receivedData, quantity, BottleCap_metal, BottleCap_plastic, Cans, CigButt, Cig_pack, Clothes, Construction, FishGear, FoodCon_foam, FoodCon_plastic, FoodWrap, GlassBottle, Lighter, Masks, OtherPack, OtherTrash, Paper, Shoes, Pen, PlasticBottle, PlasticBag, PlateCup, Straws, Toy, Utensils);
        }
        else
        {
            // Create a new user in the database
            InsertDataInDB(name, quantity, BottleCap_metal, BottleCap_plastic, Cans, CigButt, Cig_pack, Clothes, Construction, FishGear, FoodCon_foam, FoodCon_plastic, FoodWrap, GlassBottle, Lighter, Masks, OtherPack, OtherTrash, Paper, Shoes, Pen, PlasticBottle, PlasticBag, PlateCup, Straws, Toy, Utensils);
        }
    }

    public void GetAllData()
    {
        StartCoroutine(IGetAllData());
    }

    private IEnumerator IGetAllData()
    {
        yield return new WaitForSeconds(2.2f);
        WWW users = new WWW(_urlGetAllData);
        yield return users;

        receivedData = users.text;
        allData = receivedData.Split(';');

        if (allData.Length == 0) yield break;

        for (int i = 0; i < allData.Length - 1; i++)
        {
            bitnami_wordpress.entries[i].text = GetNameAndQuantity(allData[i], "Name: ");
            bitnami_wordpress.entries[i].text += ": " + GetNameAndQuantity(allData[i], "|Quantity: ");
            bitnami_wordpress.entries[i].gameObject.SetActive(true);
        }
    }
    public string GetNameAndQuantity(string data, string index)
    {
        string value = data.Substring(data.IndexOf(index) + index.Length);
        if (value.Contains("|"))
        {
            value = value.Remove(value.IndexOf("|"));
        }
        return value;
    }
}
