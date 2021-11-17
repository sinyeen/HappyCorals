using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using TMPro;

public class GarbageItem : MonoBehaviour
{
    public int count = 0;
    public TMP_Text garbageData;
    private void Start()
    {
        garbageData.text = GetComponentInChildren<TMP_Text>().text + ": " + "0";
    }
    public void Add()
    {
        count++;
        garbageData.text = GetComponentInChildren<TMP_Text>().text + ": " + count;
    }
}
