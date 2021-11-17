using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using TMPro;

public class GameManager : MonoBehaviour
{
    public static GameManager instance;
    public string playerName, location, date;
    public float totalWeight;
    public int totalQuantity;
    public int totalQty1;
    public int totalQty2;
    public int totalQty3;
    public int totalQty4;
    public int totalQty5;
    public int totalQty6;
    public int totalQty7;
    public int totalQty8;
    public int totalQty9;
    public int totalQty10;
    public int totalQty11;
    public int totalQty12;
    public int totalQty13;
    public int totalQty14;
    public int totalQty15;
    public int totalQty16;
    public int totalQty17;
    public int totalQty18;
    public int totalQty19;
    public int totalQty20;
    public int totalQty21;
    public int totalQty22;
    public int totalQty23;
    public int totalQty24;
    public int totalQty25;

    public TMP_Text totalQuantityTxt;
    private void Awake()
    {
        instance = this;
    }
    public void StartGame()
    {
        // Setting the UI with 0 in total quantity at the time of game start
        totalQuantity = 0;
        totalQuantityTxt.text = "Total Quantity: " + totalQuantity;
    }
    public void UpdateWeightAndQuantityData(float weight)
    {
        // Updating the variables and changing the UI according to that
        totalQuantity++;
        totalQuantityTxt.text = "Total Quantity: " + totalQuantity;
        totalWeight += weight;
    }

    public void UpdateQtyData1(int Qty1)
    {
        totalQty1 += Qty1;
    }

    public void UpdateQtyData2(int Qty2)
    {
        totalQty2 += Qty2;
    }

    public void UpdateQtyData3(int Qty3)
    {
        totalQty3 += Qty3;
    }

    public void UpdateQtyData4(int Qty4)
    {
        totalQty4 += Qty4;
    }

    public void UpdateQtyData5(int Qty5)
    {
        totalQty5 += Qty5;
    }

    public void UpdateQtyData6(int Qty6)
    {
        totalQty6 += Qty6;
    }

    public void UpdateQtyData7(int Qty7)
    {
        totalQty7 += Qty7;
    }

    public void UpdateQtyData8(int Qty8)
    {
        totalQty8 += Qty8;
    }

    public void UpdateQtyData9(int Qty9)
    {
        totalQty9 += Qty9;
    }

    public void UpdateQtyData10(int Qty10)
    {
        totalQty10 += Qty10;
    }

    public void UpdateQtyData11(int Qty11)
    {
        totalQty11 += Qty11;
    }

    public void UpdateQtyData12(int Qty12)
    {
        totalQty12 += Qty12;
    }

    public void UpdateQtyData13(int Qty13)
    {
        totalQty13 += Qty13;
    }

    public void UpdateQtyData14(int Qty14)
    {
        totalQty14 += Qty14;
    }

    public void UpdateQtyData15(int Qty15)
    {
        totalQty15 += Qty15;
    }

    public void UpdateQtyData16(int Qty16)
    {
        totalQty16 += Qty16;
    }

    public void UpdateQtyData17(int Qty17)
    {
        totalQty17 += Qty17;
    }

    public void UpdateQtyData18(int Qty18)
    {
        totalQty18 += Qty18;
    }

    public void UpdateQtyData19(int Qty19)
    {
        totalQty19 += Qty19;
    }

    public void UpdateQtyData20(int Qty20)
    {
        totalQty20 += Qty20;
    }

    public void UpdateQtyData21(int Qty21)
    {
        totalQty21 += Qty21;
    }

    public void UpdateQtyData22(int Qty22)
    {
        totalQty22 += Qty22;
    }

    public void UpdateQtyData23(int Qty23)
    {
        totalQty23 += Qty23;
    }

    public void UpdateQtyData24(int Qty24)
    {
        totalQty24 += Qty24;
    }

    public void UpdateQtyData25(int Qty25)
    {
        totalQty25 += Qty25;
    }
}
